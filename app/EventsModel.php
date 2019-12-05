<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventsModel extends Model
{
    protected $table ="tb_events";
    protected $fillable = [
        'title',
        'description',
        'img',
        'file'
    ];
}
