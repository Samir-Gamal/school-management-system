<?php

namespace App\Models;

use App\Traits\Uuids;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Attendance newModelQuery()
 * @method static Builder|Attendance newQuery()
 * @method static Builder|Attendance query()
 * @method static Builder|Attendance whereAttendenceDate($value)
 * @method static Builder|Attendance whereAttendenceStatus($value)
 * @method static Builder|Attendance whereClassroomId($value)
 * @method static Builder|Attendance whereCreatedAt($value)
 * @method static Builder|Attendance whereGradeId($value)
 * @method static Builder|Attendance whereId($value)
 * @method static Builder|Attendance whereSectionId($value)
 * @method static Builder|Attendance whereStudentId($value)
 * @method static Builder|Attendance whereTeacherId($value)
 * @method static Builder|Attendance whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static Builder|Attendance whereDay($value)
 * @method static Builder|Attendance whereStatus($value)
 */
class Attendance extends Model
{
    use HasFactory, Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
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
        'section_id',
        'day',
        'status',
    ];
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
