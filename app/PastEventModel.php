<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PastEventModel extends Model
{
    protected $table ="past_events";
    protected $fillable = [
        'title',
        'description',
        'file'
    ];
}
