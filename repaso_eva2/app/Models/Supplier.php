<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public function contact() {
        return $this->hasOne('App\Models\Contact');
    }

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}
