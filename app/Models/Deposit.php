<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','amount','qrcode','status','date','subscription_id'
    ];
    public function users(){
        return $this->hasOne(\App\Models\User::class,'id','user_id');
    }
    public function qrcodes(){
        return $this->hasOne(\App\Models\Qrcode::class,'id','qrcode');
    }
}
