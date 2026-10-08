<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{
    use HasFactory;

    protected $table = 'request_form';

    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'country',
        'company',
        'city',
        'service',
        'message',
        'page_url',
    ];
}