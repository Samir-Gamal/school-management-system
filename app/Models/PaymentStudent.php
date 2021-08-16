<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PaymentStudent
 *
 * @property int $id
 * @property string $date
 * @property int $student_id
 * @property string|null $amount
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStudent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStudent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStudent query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStudent whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStudent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStudent whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStudent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStudent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStudent whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStudent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PaymentStudent extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payment_students';
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
