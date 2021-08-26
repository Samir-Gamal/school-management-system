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
 * App\Models\Exam
 *
 * @property int $id
 * @property array $name
 * @property int $term
 * @property string $academic_year
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read array $translations
 * @method static Builder|Exam newModelQuery()
 * @method static Builder|Exam newQuery()
 * @method static Builder|Exam query()
 * @method static Builder|Exam whereAcademicYear($value)
 * @method static Builder|Exam whereCreatedAt($value)
 * @method static Builder|Exam whereId($value)
 * @method static Builder|Exam whereName($value)
 * @method static Builder|Exam whereTerm($value)
 * @method static Builder|Exam whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Exam extends Model
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
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exams';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'term',
        'academic_year'
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
