<?php

namespace App\Models;

use App\Traits\Uuids;
use Database\Factories\BloodTypeFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\BloodType
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|BloodType newModelQuery()
 * @method static Builder|BloodType newQuery()
 * @method static Builder|BloodType query()
 * @method static Builder|BloodType whereCreatedAt($value)
 * @method static Builder|BloodType whereId($value)
 * @method static Builder|BloodType whereName($value)
 * @method static Builder|BloodType whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static BloodTypeFactory factory(...$parameters)
 */
class BloodType extends Model
{
    use HasFactory, Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
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
