<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchModel extends Model
{
    protected $table ="researchs";
    protected $fillable = [
        'title',
        'description',
        'file'
    ];
}
