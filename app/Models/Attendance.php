<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Attendance
 *
 * @property int $id
 * @property int $student_id
 * @property int $grade_id
 * @property int $classroom_id
 * @property int $section_id
 * @property int $teacher_id
 * @property string $day
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereAttendenceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereAttendenceStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereClassroomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereStatus($value)
 */
class Attendance extends Model
{
    use Uuids;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'attendances';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id',
        'grade_id',
        'classroom_id',
        'section_id',
        'day',
        'status',
    ];
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

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

}
