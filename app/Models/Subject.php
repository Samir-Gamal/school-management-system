<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Subject extends Model
{
    use HasTranslations;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subjects';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'grade_id',
        'classroom_id',
        'teacher_id'
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

    public $translatable = ['name'];

    // جلب اسم المراحل الدراسية

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    // جلب اسم الصفوف الدراسية
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    // جلب اسم المعلم
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }


}
