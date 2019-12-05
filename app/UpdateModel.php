<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpdateModel extends Model
{
    protected $table ="tb_updates";
    protected $fillable = [
        'title',
        'description',
        'img',
        'file'
    ];
}
