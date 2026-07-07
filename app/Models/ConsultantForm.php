<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantForm extends Model
{
    use HasFactory;
    protected $table = 'consultant_form';
    protected $fillable = [
        'fullname', 'email', 'phone', 'country', 'message'
    ];
     
}