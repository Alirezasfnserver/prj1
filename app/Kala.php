<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kala extends Model
{
    protected $guarded = [];
    public function User(){


        return $this->belongsTo(User::class);
    }
}
