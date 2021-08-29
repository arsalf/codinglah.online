<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkHKarya extends Model
{
    use HasFactory;

    public $table = 'manager_home_karya';

    protected $fillable = [
        'image',
        'category',
        'rating',
        'title',
        'description',
        'link'
    ];
}
