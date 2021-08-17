<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Promotion
 *
 * @property int $id
 * @property int $student_id
 * @property int $from_grade
 * @property int $from_classroom
 * @property int $from_section
 * @property int $to_grade
 * @property int $to_classroom
 * @property int $to_section
 * @property string $academic_year
 * @property string $academic_year_new
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Classroom $f_classroom
 * @property-read \App\Models\Grade $f_grade
 * @property-read \App\Models\Section $f_section
 * @property-read \App\Models\Student $student
 * @property-read \App\Models\Classroom $t_classroom
 * @property-read \App\Models\Grade $t_grade
 * @property-read \App\Models\Section $t_section
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereAcademicYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereAcademicYearNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereFromClassroom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereFromGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereFromSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereToClassroom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereToGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereToSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Promotion extends Model
{
    use Uuids;
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
