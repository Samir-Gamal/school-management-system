<?php

namespace App\Models;

use App\Traits\Uuids;
use Database\Factories\GradeFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Grade
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property array $name
 * @property string|null $notes
 * @property-read Collection|Classroom[] $classrooms
 * @property-read int|null $classrooms_count
 * @property-read array $translations
 * @property-read Collection|Section[] $sections
 * @property-read int|null $sections_count
 * @method static Builder|Grade newModelQuery()
 * @method static Builder|Grade newQuery()
 * @method static Builder|Grade query()
 * @method static Builder|Grade whereCreatedAt($value)
 * @method static Builder|Grade whereId($value)
 * @method static Builder|Grade whereName($value)
 * @method static Builder|Grade whereNotes($value)
 * @method static Builder|Grade whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static GradeFactory factory(...$parameters)
 */
class Grade extends Model
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
    protected $table = 'grades';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'notes'
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

    // علاقة المراحل الدراسية لجلب الاقسام المتعلقة بكل مرحلة

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

}
