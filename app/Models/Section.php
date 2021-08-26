<?php

namespace App\Models;

use App\Traits\Uuids;
use Database\Factories\SectionFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Section
 *
 * @property int $id
 * @property array $name
 * @property int $status
 * @property int $grade_id
 * @property int $classroom_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Classroom $classroom
 * @property-read array $translations
 * @property-read Collection|Teacher[] $teachers
 * @property-read int|null $teachers_count
 * @method static Builder|Section newModelQuery()
 * @method static Builder|Section newQuery()
 * @method static Builder|Section query()
 * @method static Builder|Section whereClassroomId($value)
 * @method static Builder|Section whereCreatedAt($value)
 * @method static Builder|Section whereGradeId($value)
 * @method static Builder|Section whereId($value)
 * @method static Builder|Section whereName($value)
 * @method static Builder|Section whereStatus($value)
 * @method static Builder|Section whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static SectionFactory factory(...$parameters)
 */
class Section extends Model
{
    use HasFactory, HasTranslations, Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    public $translatable = ['name'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sections';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'grade_id',
        'classroom_id'
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

    // علاقة بين الاقسام والصفوف لجلب اسم الصف في جدول الاقسام

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    // علاقة الاقسام مع المعلمين
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'section_teacher');
    }

}
