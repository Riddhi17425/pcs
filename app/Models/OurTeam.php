<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    protected $table = 'our_team';
    use SoftDeletes;
    protected $fillable = [
        'id',
        'title',
        'description',
        'short_description',
        'image',
        'name',
        'designation',
        'status',
        'alt_tag',
        'updated_at',
        'deleted_at'
    ];
}
 