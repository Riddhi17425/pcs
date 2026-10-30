<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blogs extends Model
{
    use SoftDeletes;

    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'short_description',
        'front_image',
        'front_image_alt',
        'detail_image',
        'detail_image_alt',
        'url',
        'cta_image',
        'meta_title',
        'meta_description',
        'cta_text',
        'date',
        'detail_description',
        'blog_faq',
        'status',
        'conclusion',
    ];

    protected $casts = [
        'blog_faq' => 'array',
        'date' => 'date:Y-m-d',
    ];
}