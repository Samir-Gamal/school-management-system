<?php

namespace App\Models;

use App\Traits\Uuids;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Teacher
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property array $name
 * @property int $specialization_id
 * @property int $gender_id
 * @property string $joining_at
 * @property string $address
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Gender $genders
 * @property-read array $translations
 * @property-read Collection|Section[] $sections
 * @property-read int|null $sections_count
 * @property-read Specialization $specializations
 * @method static Builder|Teacher newModelQuery()
 * @method static Builder|Teacher newQuery()
 * @method static Builder|Teacher query()
 * @method static Builder|Teacher whereAddress($value)
 * @method static Builder|Teacher whereCreatedAt($value)
 * @method static Builder|Teacher whereEmail($value)
 * @method static Builder|Teacher whereGenderId($value)
 * @method static Builder|Teacher whereId($value)
 * @method static Builder|Teacher whereJoiningDate($value)
 * @method static Builder|Teacher whereName($value)
 * @method static Builder|Teacher wherePassword($value)
 * @method static Builder|Teacher whereSpecializationId($value)
 * @method static Builder|Teacher whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static Builder|Teacher whereJoiningAt($value)
 */
class Teacher extends Model
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
    protected $table = 'teachers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'specialization_id',
        'gender_id',
        'joining_at',
        'address',
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

    // علاقة بين المعلمين والتخصصات لجلب اسم التخصص

    public function specializations()
    {
        return $this->belongsTo(Specialization::class, 'specialization_id');
    }

    // علاقة بين المعلمين والانواع لجلب جنس المعلم
    public function genders()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

// علاقة المعلمين مع الاقسام
    public function sections()
    {
        return $this->belongsToMany(Section::class, 'teacher_section');
    }


}
