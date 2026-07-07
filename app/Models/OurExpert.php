<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurExpert extends Model
{
    protected $table = 'our_expert';
    use SoftDeletes;    
    protected $fillable = [
        'id',
        'name',
        'designation',
        'image',
        'status', 
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
