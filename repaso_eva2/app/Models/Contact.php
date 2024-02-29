<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function supplier() {
        return $this->belongsTo('App\Models\Supplier');
    }

    public function employee() {
        return $this->belongsTo('App\Models\Employee');
    }
}
