<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProcessingFee
 *
 * @property int $id
 * @property string $date
 * @property int $student_id
 * @property string|null $amount
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProcessingFee extends Model
{
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

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
