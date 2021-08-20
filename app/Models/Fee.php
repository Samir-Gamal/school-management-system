<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Classroom $classroom
 * @property-read array $translations
 * @property-read \App\Models\Gender $grades
 * @method static \Illuminate\Database\Eloquent\Builder|Fee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereClassroomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereYear($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Grade $grade
 */
class Fee extends Model
{
    use HasFactory, HasTranslations,Uuids;
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

    public $translatable = ['title'];

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
