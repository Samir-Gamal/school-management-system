<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    protected $fillable=['Name'];
    protected $table = 'type_bloods';
}
