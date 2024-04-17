<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name','last_name','mobile','role','country','state','city','current_plan',
        'email',
        'password','wallet_amount','withdraw_amount'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function countrys(){
        return $this->hasOne(Country::class,'id','country');
    }
    public function subscriptions(){
        return $this->hasOne(Subscripton::class,'id','current_plan');
    }
    public function subscriptionsmany()
    {
        return $this->hasMany(SubScription::class);
    }
    public static function walletamount(){
        $balance=\App\Models\Deposit::where('user_id',auth()->user()->id)->where('status','approved')->sum('amount');
        return $balance;
    }
    public static function withdrawamount(){
        $balance=\App\Models\Withdraw::where('user_id', auth()->user()->id)
    ->where('status', 'approved')
    ->select(\DB::raw('SUM(amount + intrest) as total'))
    ->get()
    ->pluck('total')
    ->first();
        return $balance;
    }
}
