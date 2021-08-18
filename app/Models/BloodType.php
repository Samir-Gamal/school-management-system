<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BloodType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType query()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\BloodTypeFactory factory(...$parameters)
 */
class BloodType extends Model
{
    use HasFactory, Uuids;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blood_types';
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

}
