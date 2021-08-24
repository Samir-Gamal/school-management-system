<?php

namespace App\Models;

use App\Traits\Uuids;
use Database\Factories\SpecializationFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Translatable\HasTranslations;


/**
 * App\Models\Specialization
 *
 * @property string $id
 * @property array $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read array $translations
 * @method static Builder|Specialization newModelQuery()
 * @method static Builder|Specialization newQuery()
 * @method static Builder|Specialization query()
 * @method static Builder|Specialization whereCreatedAt($value)
 * @method static Builder|Specialization whereId($value)
 * @method static Builder|Specialization whereName($value)
 * @method static Builder|Specialization whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static SpecializationFactory factory(...$parameters)
 */
class Specialization extends Model
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
    protected $table = 'specializations';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
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
