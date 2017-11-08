<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $table = 'wines';

    protected $fillable = [
        'name',
        'color',
        'varietal',
        'harvest',
        'region'
    ];
}
