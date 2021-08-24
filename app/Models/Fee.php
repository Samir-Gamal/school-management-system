<?php

namespace App\Models;

use App\Traits\Uuids;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Fee
 *
 * @property int $id
 * @property array $title
 * @property string $amount
 * @property int $grade_id
 * @property int $classroom_id
 * @property string|null $description
 * @property string $year
 * @property int $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Classroom $classroom
 * @property-read array $translations
 * @property-read Gender $grades
 * @method static Builder|Fee newModelQuery()
 * @method static Builder|Fee newQuery()
 * @method static Builder|Fee query()
 * @method static Builder|Fee whereAmount($value)
 * @method static Builder|Fee whereClassroomId($value)
 * @method static Builder|Fee whereCreatedAt($value)
 * @method static Builder|Fee whereDescription($value)
 * @method static Builder|Fee whereGradeId($value)
 * @method static Builder|Fee whereId($value)
 * @method static Builder|Fee whereTitle($value)
 * @method static Builder|Fee whereType($value)
 * @method static Builder|Fee whereUpdatedAt($value)
 * @method static Builder|Fee whereYear($value)
 * @mixin Eloquent
 * @property-read Grade $grade
 */
class Fee extends Model
{
    use HasFactory, HasTranslations, Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    public $translatable = ['title'];
    public $type_map = [
        1 => 'school_fee',
        2 => 'bus_fee',

    ];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fees';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'amount',
        'grade_id',
        'classroom_id',
        'year',
        'description',
        'type'
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

    public function getTypeNameAttribute()
    {
        return __('main.' . $this->type_map[$this->type]);
    }

    // علاقة بين الرسوم الدراسية والمراحل الدراسية لجب اسم المرحلة

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }


    // علاقة بين الصفوف الدراسية والرسوم الدراسية لجب اسم الصف

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
