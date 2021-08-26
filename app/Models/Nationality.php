<?php

namespace App\Models;

use App\Traits\Uuids;
use Database\Factories\NationalityFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Nationality
 *
 * @property int $id
 * @property array $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read array $translations
 * @method static Builder|Nationality newModelQuery()
 * @method static Builder|Nationality newQuery()
 * @method static Builder|Nationality query()
 * @method static Builder|Nationality whereCreatedAt($value)
 * @method static Builder|Nationality whereId($value)
 * @method static Builder|Nationality whereName($value)
 * @method static Builder|Nationality whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static NationalityFactory factory(...$parameters)
 */
class Nationality extends Model
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
    protected $table = 'nationalities';
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
