<?php

namespace App\Models;

use App\Traits\Uuids;
use Database\Factories\ClassroomFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Classroom
 *
 * @property int $id
 * @property array $name
 * @property int $grade_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read array $translations
 * @property-read Grade $grade
 * @method static Builder|Classroom newModelQuery()
 * @method static Builder|Classroom newQuery()
 * @method static Builder|Classroom query()
 * @method static Builder|Classroom whereCreatedAt($value)
 * @method static Builder|Classroom whereGradeId($value)
 * @method static Builder|Classroom whereId($value)
 * @method static Builder|Classroom whereName($value)
 * @method static Builder|Classroom whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static ClassroomFactory factory(...$parameters)
 */
class Classroom extends Model
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
    protected $table = 'classrooms';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'grade_id'
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


    // علاقة بين الصفوف المراحل الدراسية لجلب اسم المرحلة في جدول الصفوف

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
