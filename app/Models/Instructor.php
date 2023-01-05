<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $guarded = [];

    public function instructor(){
        return $this->hasMany('App/Vehicle', 'vehicle_id', 'id');
}

 public function user(){
        return $this->belongsTo(User::class);
}

}