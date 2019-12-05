<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoModel extends Model
{
    protected $table ="photos";
    protected $fillable = [
        'caption',
        'img'
    ];
}
