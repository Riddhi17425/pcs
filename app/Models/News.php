<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    use SoftDeletes;
    protected $fillable = [
        'title',
        'short_description',
        'front_image',
        'detail_image',
        'detail_description',
        'url',
        'date',
        'status',
        'updated_at',
        'deleted_at'
    ];
}
 