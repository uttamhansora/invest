<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qrcode;


class AdminLoginController extends Controller
{
    public function termsandconditions(){
        return view('terms');
    }
    public function privacypolicy(){
        return view('privacy');
    }
    // Test Code Psuh New Code 11
    public function login(){
        try {
             return view('admin.login');
        }catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }  
    public function contactform(){
        $contact=\App\Models\Contact::orderBy('id','DESC')->get();
        return view('admin.contactform',compact('contact'));
    }
    public function assignqr(Request $request){
        $user=\App\Models\User::where('id',$request->id)->first();
        $user->qrcode=$request->val;
        $user->save();
        return true;
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
            if(auth()->user()->role==1){
                return redirect()->route('dashboard')->with('success', 'Login SuccessFully.');
            }else{
                \Auth::logout();
                return redirect()->route('admin-login')->with('error', 'You Dont Have Permission')
                ->withInput();
            }
          }else{
            return redirect()->route('admin-login')->with('error', 'Email-Address And Password Are Wrong.')
                ->withInput();
        }
        }catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function dashboard(){
        try {
            return view('admin.dashboard');
        }catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function users(){
        try {
            $users=\App\Models\User::orderBy('id','DESC')->get();
            $qrcode=\App\Models\Qrcode::orderBy('id','DESC')->get();
            return view('admin.users',compact('users','qrcode'));

        } catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function statusupdate(Request $request){
        try {
            $users=\App\Models\User::where('id',$request->id)->first();

            $users->save();
            return "Status Update Successfully.";

        } catch (\Exception $e) {
            // If an exception occurs during the process
            return "Something Went Wrong";
        }
    }
    public function qrcode(){
        try {
            $data=Qrcode::all();
            return view('admin.qr-code',compact('data'));
        } catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function addqrcode(){
        try {
            return view('admin.add-qr-code');
        } catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function submitqrcode(Request $request){
        try {
            // Validate the incoming request data
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust the validation rules as needed
            ]);
            $imageName=null;
            // Check if a file is uploaded
            if ($request->hasFile('image')) {
                // Get the file from the request
                $image = $request->file('image');

                // Generate a unique name for the file
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Move the uploaded file to the desired location
                $image->move(public_path('images'), $imageName);

                // Save the file name to the database
              
            }
            $qrcode = new Qrcode();
            $qrcode->image = $imageName;
            $qrcode->qrname = $request->qrname;
            $qrcode->walletid = $request->walletid;
            $qrcode->save();

            // Redirect back or do any further processing
            return redirect()->route('qr-code')->with('success', 'QR Code Submit successfully.');
            // If no file is uploaded or something went wrong
            // return back()->with('error', 'Failed to upload image.');
        } catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function subscription(){
        try {
            $subscripton=\App\Models\Subscripton::all();
            return view('admin.subscripton',compact('subscripton'));

        } catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function addsubscription(){
        try {
            return view('admin.addsubscription');
        } catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function approvedreject(Request $request){
        $data=\App\Models\Deposit::where('id',$request->id)->first();
        if($request->status=='approve'){
            $data->users->wallet_amount=$data->users->wallet_amount + (int)$data->amount;
            $data->users->save();
            $data->status='approved';
        }else{
            $data->status='rejected';
        }
        $data->date=now();
        $data->save();
        return true;
    }
    public function approvedrejectwith(Request $request){
        $data=\App\Models\Withdraw::where('id',$request->id)->first();
        if($request->status=='approve'){
            $data->users->wallet_amount=$data->users->wallet_amount - (int)$data->amount;
            $data->users->save();
            $data->status='approved';
        }else{
            $data->status='rejected';
        }
        $data->date=now();
        $data->save();
        return true;
    }
    public function finqrcode(Request $request){
        $data=\App\Models\Withdraw::where('id',$request->id)->first();
        // return $data;
        $user=\App\Models\User::where('id',$data->user_id)->first();
        $datas['image']=asset('images/'.$user->qr_code_image ?? '');
        $datas['wallet_id']=$user->wallet_id ?? '';
        $datas['id']=$data->id;
        
        return $datas;
    }
    public function finqrcodenotify(Request $request){
        $user=\App\Models\User::where('id',$request->id)->first();
        $sub=\App\Models\SubScription::where('id',$request->subid)->first();
        
        $payableamount=\App\Models\Deposit::where('subscription_id',$sub->subscription_id)->where('status','approved')->sum('amount');

        $datas['image']=asset('images/'.$user->qr_code_image ?? '');
        $datas['wallet_id']=$user->wallet_id ?? '';
        $datas['id']=$user->id;
        $datas['amount']=$payableamount;
        $datas['user_id']=$user->id;
        $datas['sub_id']=$request->subid;
        
        return $datas;
    }
    public function withdrawupdatenotification(Request $request){
        $amount=new \App\Models\UserAmount();
        $amount->user_id=$request->user_id;
        $amount->amount=$request->amount;
        $amount->intrest=$request->intrest;
        $amount->subscription_id=$request->subscription_id;
        $amount->save();
        $user=\App\Models\User::where('id',$request->user_id)->first();
        $user->withdraw_amount=(int)$user->withdraw_amount + (int)$request->amount + (int)$request->intrest;
        $user->save();  
        $notification=\App\Models\Notification::where('id',$request->noid)->first();
        $notification->is_done=2;
        $notification->save();
        return redirect()->back()->with('success','Amount Send Successfully.');
    }
    public function submitverify(Request $request){
        $data=\App\Models\Document::where('id',$request->id)->first();
        $data->status=$request->status;
        $data->rejectreason=$request->reason ?? '';
        $data->save();
        $user=\App\Models\User::where('id',$data->user_id)->first();
        if($request->status=='reject'){
            $user->doc_verify='3';

        }else{
            $user->doc_verify= '2';
        }
        $user->save();
        return true;
    }
    public function notification(){
        $notification=\App\Models\Notification::orderBy('id','DESC')->get();
        return view('admin.notification',compact('notification'));
    }
    public function verifydoc(){
        $verifydoc=\App\Models\Document::orderBy('id','DESC')->get();
        return view('admin.verifydoc',compact('verifydoc'));
    }
    public function deposit(){
        try {
            $deposit=\App\Models\Deposit::orderBy('id','DESC')->get();
            $withdraw=\App\Models\Withdraw::orderBy('id','DESC')->get();
            return view('admin.deposit',compact('deposit','withdraw'));
        } catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function withdrawupdate(Request $request){
        try {
            $withdraw=\App\Models\Withdraw::where('id',$request->wid)->first();
            $withdraw->users->withdraw_amount=(int) $withdraw->users->withdraw_amount - (int)$request->walletamount;
            $withdraw->users->save();
            $withdraw->intrest=$request->intrest ?? 0;
            $withdraw->date=now();
            $withdraw->status='approved';
            $withdraw->save();
            return redirect()->back()->with('success', 'Withdraw Updated successfully.');

        } catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function updatestatus(Request $request){
        $user=\App\Models\User::where('id',$request->userId)->first();
        if($request->is_active !=null){
            $user->is_active=$request->is_active;
        }else{
            $user->is_banned=$request->is_banned;
        }
        $user->save();
        return true;
    }
    public function submitsubscription(Request $request){
        try {
            $subscription=new \App\Models\Subscripton();
            $subscription->name=$request->name;
            $subscription->details=$request->details;
            $subscription->created_by=auth()->user()->id;
            $subscription->duration=$request->duration;
            $subscription->min_amount=$request->amount;
            $subscription->is_active=1;
            $subscription->save();
            return redirect()->route('subscription')->with('success', 'Subscription Create successfully.');
        } catch (\Exception $e) {
            // If an exception occurs during the process
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function logout(Request $request)
    {
        \Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin-login');
    }
}
