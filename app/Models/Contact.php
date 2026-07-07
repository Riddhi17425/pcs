<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $fillable = [
        'fullname', 'email', 'phone', 'country', 'services', 'message'
    ];
     protected $casts = [
        'services' => 'array', // auto cast JSON
    ];
}
