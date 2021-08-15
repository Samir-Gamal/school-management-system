<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Guardian extends Model
{
    use HasTranslations;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'guardians';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'father_name',
        'father_job',
        'mother_name',
        'mother_job'
    ];
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public $translatable = [
        'name_father',
        'job_father',
        'name_mother',
        'job_mother'
    ];

}
