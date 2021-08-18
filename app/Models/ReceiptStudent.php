<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ReceiptStudent
 *
 * @property int $id
 * @property string $date
 * @property int $student_id
 * @property string|null $debit
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereDebit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ReceiptStudent extends Model
{
    use Uuids;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'receipt_students';
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

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
