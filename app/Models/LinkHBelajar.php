<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkHBelajar extends Model
{
    use HasFactory;

    public $table = 'link_h_belajar';

    protected $fillable = [
        'id_bahasa',
        'link'
    ];
}
