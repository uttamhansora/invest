<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscripton extends Model
{
    use HasFactory;
    public function createduser(){
        return $this->hasOne(User::class,"id","created_by");
    }
}
