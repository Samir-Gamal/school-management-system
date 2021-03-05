<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentAttachment extends Model
{
    protected $fillable=['file_name','parent_id'];
}
