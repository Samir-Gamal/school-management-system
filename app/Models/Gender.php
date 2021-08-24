<?php

namespace App\Models;

use App\Traits\Uuids;
use Database\Factories\GenderFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Gender
 *
 * @property int $id
 * @property array $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read array $translations
 * @method static Builder|Gender newModelQuery()
 * @method static Builder|Gender newQuery()
 * @method static Builder|Gender query()
 * @method static Builder|Gender whereCreatedAt($value)
 * @method static Builder|Gender whereId($value)
 * @method static Builder|Gender whereName($value)
 * @method static Builder|Gender whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static GenderFactory factory(...$parameters)
 */
class Gender extends Model
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
    protected $table = 'genders';
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
