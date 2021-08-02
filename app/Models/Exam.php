<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Exam extends Model
{
    use HasTranslations;
    protected $fillable = ['name','term','academic_year'];
    public $translatable = ['name'];
}
