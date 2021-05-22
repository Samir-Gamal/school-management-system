<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Nationalitie extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];
    protected $fillable =['Name'];
    //protected $guarded =[];
}
