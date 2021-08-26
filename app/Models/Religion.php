<?php

namespace App\Models;

use App\Traits\Uuids;
use Database\Factories\ReligionFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Religion
 *
 * @property int $id
 * @property array $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read array $translations
 * @method static Builder|Religion newModelQuery()
 * @method static Builder|Religion newQuery()
 * @method static Builder|Religion query()
 * @method static Builder|Religion whereCreatedAt($value)
 * @method static Builder|Religion whereId($value)
 * @method static Builder|Religion whereName($value)
 * @method static Builder|Religion whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static ReligionFactory factory(...$parameters)
 */
class Religion extends Model
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
    protected $table = 'religions';
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
