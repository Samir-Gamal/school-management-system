<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promotions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'student_id',
        'from_grade',
        'from_classroom',
        'from_section',
        'to_grade',
        'to_classroom',
        'to_section',
        'academic_year',
        'academic_year_new',
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


    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // علاقة بين الترقيات والمراحل الدراسية لجلب اسم المرحلة في جدول الترقيات

    public function f_grade()
    {
        return $this->belongsTo(Grade::class, 'from_grade');
    }


    // علاقة بين الترقيات الصفوف الدراسية لجلب اسم الصف في جدول الترقيات

    public function f_classroom()
    {
        return $this->belongsTo(Classroom::class, 'from_classroom');
    }

    // علاقة بين الترقيات الاقسام الدراسية لجلب اسم القسم  في جدول الترقيات

    public function f_section()
    {
        return $this->belongsTo('App\Models\Section', 'from_section');
    }

    // علاقة بين الترقيات والمراحل الدراسية لجلب اسم المرحلة في جدول الترقيات

    public function t_grade()
    {
        return $this->belongsTo(Grade::class, 'to_grade');
    }


    // علاقة بين الترقيات الصفوف الدراسية لجلب اسم الصف في جدول الترقيات

    public function t_classroom()
    {
        return $this->belongsTo(Classroom::class, 'to_classroom');
    }

    // علاقة بين الترقيات الاقسام الدراسية لجلب اسم القسم  في جدول الترقيات

    public function t_section()
    {
        return $this->belongsTo(Section::class, 'to_section');
    }

















}
