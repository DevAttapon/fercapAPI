<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PastSurveryModel extends Model
{
    protected $table ="past_surveys";
    protected $fillable = [
        'title',
        'description',
        'file'
    ];
}
