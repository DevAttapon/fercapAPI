<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkModel extends Model
{
    protected $table ="tb_links";
    protected $fillable = [
        'title',
        'description',
        'file'
    ];
}
