<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainningModel extends Model
{
    protected $table ="training";
    protected $fillable =[
        'title',
        'description',
        'file'
    ];
}
