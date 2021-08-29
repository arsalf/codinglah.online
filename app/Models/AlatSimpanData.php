<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatSimpanData extends Model
{
    use HasFactory;
    public $table = 'alatsimpandata';

    protected $fillable = [
        'data1', 'data2' 
    ];
}
