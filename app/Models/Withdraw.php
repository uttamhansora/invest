<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','amount','status','date','intrest'
    ];
    public function users(){
        return $this->hasOne(\App\Models\User::class,'id','user_id');
    }
    
}
