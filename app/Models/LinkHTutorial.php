<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkHTutorial extends Model
{
    use HasFactory;

    public $table = 'link_h_tutorial';

    protected $fillable = [
        'id_bahasa',
        'title',
        'link'
    ];
}
