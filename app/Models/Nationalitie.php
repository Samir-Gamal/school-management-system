<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Nationalitie
 *
 * @property int $id
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Nationalitie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationalitie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationalitie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationalitie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationalitie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationalitie whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationalitie whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Nationalitie extends Model
{
    use HasTranslations;
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
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

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

    public $translatable = ['name'];
}
