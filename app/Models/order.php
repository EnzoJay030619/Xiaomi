<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable=['userID','amount','paymentStatus','address','customerName'];

    public function product(){

        return $this->hasMany('App\Product');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }
}
