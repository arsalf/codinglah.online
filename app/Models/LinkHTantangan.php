<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkHTantangan extends Model
{
    use HasFactory;

    public $table = 'link_h_tantangan';

    protected $fillable=[
        'id_bahasa',
        'basic',
        'inter',
        'pro'
    ];
}
