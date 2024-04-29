<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qrcode;

class UserController extends Controller
{
    public function login(){
        try {
             return view('user.login');
        }catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }  
    public function login_post(Request $request){
        try {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if(auth()->user()->role==2){
                return redirect()->route('user-dashboard')->with('success', 'Login SuccessFully.');
            }else{
                \Auth::logout();
                return redirect()->route('user-login')->with('error', 'You Dont Have Permission')
                ->withInput();
            }
          }else{
            return redirect()->route('user-login')->with('error', 'Email-Address And Password Are Wrong.')
                ->withInput();
        }
        }catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function dashboard(){
        try {
            $deposit=\App\Models\Deposit::where('user_id',auth()->user()->id)->get()->map(function ($record) {
                $record['model_name'] = 'Deposit';
                return $record;
            });
            $withdraw=\App\Models\Withdraw::where('user_id',auth()->user()->id)->get()->map(function ($record) {
                $record['model_name'] = 'Withdraw';
                return $record;
            });
            $mergedRecords = $deposit->merge($withdraw);
            $mergedRecords = $mergedRecords->sortByDesc('created_at')->take(5);
            $doc=\App\Models\Document::where('user_id',auth()->user()->id)->get();
            return view('user.dashboard',compact('mergedRecords','doc'));
        }catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
}
    
    public function logout(Request $request)
    {
        \Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/user-login');
    }
    public function register(){
        try {
            $country=\App\Models\Country::all();
            return view('user.register',compact('country'));
       }catch (\Exception $e) {
           // If an exception occurs during the process
           return back()->with('error', 'Error: ' . $e->getMessage());
       }
    }
    public function deposit(){
        $data=\App\Models\Qrcode::where('id',auth()->user()->qrcode)->first();
        $subscription=\App\Models\SubScription::where('user_id',auth()->user()->id)->where('is_end','no')->pluck('subscription_id');
        $sub=\App\Models\Subscripton::all();
        return view('user.deposit',compact('data','sub'));
    }
    public function withdraw(){
        return view('user.withdraw');
    }
    public function depositamount(Request $request){
        try{
            $this->validate($request, [
                'walletamount' => 'required|string|max:255'
            ]);
            $current_plan=\App\Models\SubScription::where(['user_id'=>auth()->user()->id,'is_end'=>'no'])->first();
            if(!$current_plan){
                return redirect()->back()->with('error', 'Please Select Subscription Plan');
            }

            $min=\App\Models\Subscripton::where('id',$current_plan->subscription_id)->first();
            // dd($min);
            if((int)$min->min_amount > $request->input('walletamount')){
                return redirect()->back()->with('error', 'Please Enter Minimum Deposit Amount')->withInput();
            }
            // If validation passes, create the user
            $user = \App\Models\Deposit::create([
                'amount' => $request->input('walletamount'),
                'user_id' => auth()->user()->id,
                'subscription_id' => $request->sub_id,
                'qrcode' => auth()->user()->qrcode,
                'status' => 'pending'
            ]);
            // \Auth::login($user);
            return redirect()->back()->with('success', 'Deposit Request Submit SuccessFully.');
        }catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage())->withInput();;
        }
    }
    public function submitwithdraw(Request $request){
        try{
            $this->validate($request, [
                'withdrawamount' => 'required|string|max:255'
            ]);
            // if(auth()->user()->current_plan==NULL){
            //     return redirect()->back()->with('error', 'Please Select Subscription Plan');
            // }
            // $max=auth()->user()->wallet_amount;
            $withdrawamount=auth()->user()->withdraw_amount;

            // dd($min);
            if((int)$withdrawamount < $request->input('withdrawamount')){
                return redirect()->back()->with('error', 'Please Enter Valid Amount')->withInput();
            }
            // If validation passes, create the user
            $user = \App\Models\Withdraw::create([
                'amount' => $request->input('withdrawamount'),
                'user_id' => auth()->user()->id,
                'status' => 'pending'
            ]);
            // \Auth::login($user);
            return redirect()->back()->with('success', 'Withdraw Request Submit SuccessFully.');
        }catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage())->withInput();;
        }
    }
    public function userprofile(){
        try {
            return view('user.profile');
       }catch (\Exception $e) {
           // If an exception occurs during the process
           return back()->with('error', 'Error: ' . $e->getMessage());
       }
    }
    public function updateuserprofile(Request $request){
        try {
           $data=auth()->user();
           $data->first_name=$request->first_name;
           $data->last_name=$request->last_name;
           $data->wallet_id=$request->wallet_id;
           $imageName=null;
           // Check if a file is uploaded
           if ($request->hasFile('qr_code_image')) {
               // Get the file from the request
               $image = $request->file('qr_code_image');

               // Generate a unique name for the file
               $imageName = time() . '_' . $image->getClientOriginalName();

               // Move the uploaded file to the desired location
               $image->move(public_path('images'), $imageName);

               // Save the file name to the database
             
           }
           $data->qr_code_image=$imageName;
           $data->save();
           return redirect()->back()->with('success', 'Profile Update SuccessFully.');
       }catch (\Exception $e) {
           // If an exception occurs during the process
           return back()->with('error', 'Error: ' . $e->getMessage());
       }
    }
    public function subscription(){
        $data=\App\Models\Subscripton::where('is_active','1')->get();
        $subscription=\App\Models\SubScription::where('user_id',auth()->user()->id)->where('is_end','no')->pluck('subscription_id');
        $activedata=\App\Models\Subscripton::whereIn('id',$subscription)->get();

        $subscriptions=\App\Models\SubScription::where('user_id',auth()->user()->id)->where('is_end','yes')->pluck('subscription_id');
        $activedatano=\App\Models\Subscripton::whereIn('id',$subscriptions)->get();
        return view('user.subscription',compact('data','activedata','activedatano'));
    }
    public function selectplan(Request $request){
        // $data=auth()->user();
        // $data->current_plan=$request->id;
        // $data->save();
        $sub=\App\Models\Subscripton::where('id',$request->id)->first();
       
        $duration = intval($sub->duration);
        $startDate = \Carbon\Carbon::now();
        $endDate = $startDate->copy()->addMonths($duration);
        $checkexitplan=\App\Models\SubScription::where(['user_id'=>auth()->user()->id,'subscription_id'=>$request->id,'is_end'=>'no'])->first();
        if(!$checkexitplan){
            $new=new \App\Models\SubScription();
            $new->user_id=auth()->user()->id;
            $new->subscription_id=$request->id;
            $new->start_date=$startDate;
            $new->end_Date=$endDate;
            $new->save();
            return true;
        }else{
            return false;
        }
        
    }
    public function wallethistory(){
        $deposit=\App\Models\Deposit::where('user_id',auth()->user()->id)->get()->map(function ($record) {
            $record['model_name'] = 'Deposit';
            return $record;
        });
        $withdraw=\App\Models\Withdraw::where('user_id',auth()->user()->id)->get()->map(function ($record) {
            $record['model_name'] = 'Withdraw';
            return $record;
        });
        $mergedRecords = $deposit->merge($withdraw);
        $mergedRecords = $mergedRecords->sortByDesc('created_at');
        return view('user.wallet-history',compact('mergedRecords'));
    }
    public function register_post(Request $request){
        try{
            $this->validate($request, [
                'first_name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6',
                'last_name' => 'required|string|max:255',
                'country' => 'required|string|max:255',
                'state' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'mobile' => 'required|string|max:255|unique:users,mobile',
            ]);
        
            // If validation passes, create the user
            $user = \App\Models\User::create([
                'first_name' => $request->input('first_name'),
                'email' => $request->input('email'),
                'password' => \Hash::make($request->input('password')),
                'role' => 2,
                'last_name' => $request->input('last_name'),
                'mobile' => $request->input('mobile'),
                'country' => $request->input('country'),
                'state' => $request->input('state'),
                'city' => $request->input('city'),
            ]);
            \Auth::login($user);
            return redirect()->route('user-dashboard')->with('success', 'Register SuccessFully.');
        }catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage())->withInput();;
        }
    }
    public function getstate(Request $request)
    {
        $countryId = $request->input('country_id');

        // Assuming you have a Country model with a relationship to State model
        $country = \App\Models\Country::findOrFail($countryId);
        $states = $country->states()->select('id', 'name')->get();

        return response()->json(['states' => $states]);
    }
    public function getcity(Request $request)
    {
        $countryId = $request->input('state_id');

        // Assuming you have a Country model with a relationship to State model
        $country = \App\Models\State::findOrFail($countryId);
        $states = $country->cities()->select('id', 'name')->get();

        return response()->json(['cities' => $states]);
    }
}
