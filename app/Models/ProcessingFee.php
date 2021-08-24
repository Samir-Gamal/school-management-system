<?php

namespace App\Models;

use App\Traits\Uuids;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProcessingFee
 *
 * @property int $id
 * @property string $date
 * @property int $student_id
 * @property string|null $amount
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Student $student
 * @method static Builder|ProcessingFee newModelQuery()
 * @method static Builder|ProcessingFee newQuery()
 * @method static Builder|ProcessingFee query()
 * @method static Builder|ProcessingFee whereAmount($value)
 * @method static Builder|ProcessingFee whereCreatedAt($value)
 * @method static Builder|ProcessingFee whereDate($value)
 * @method static Builder|ProcessingFee whereDescription($value)
 * @method static Builder|ProcessingFee whereId($value)
 * @method static Builder|ProcessingFee whereStudentId($value)
 * @method static Builder|ProcessingFee whereUpdatedAt($value)
 * @mixin Eloquent
 */
class ProcessingFee extends Model
{
    use Uuids;

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
    protected $table = 'processing_fees';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
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

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
