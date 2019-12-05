<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicationModel extends Model
{
    protected $table ="publications";
    protected $fillable = [
        'title',
        'description',
        'file'
    ];
}
