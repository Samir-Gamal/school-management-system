<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function quizze()
    {
        return $this->belongsTo('App\Models\Quizze');
    }
}
