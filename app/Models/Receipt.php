<?php

namespace App\Models;

use App\Traits\Uuids;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\ReceiptStudent
 *
 * @property int $id
 * @property string $date
 * @property int $student_id
 * @property string|null $debit
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Student $student
 * @method static Builder|ReceiptStudent newModelQuery()
 * @method static Builder|ReceiptStudent newQuery()
 * @method static Builder|ReceiptStudent query()
 * @method static Builder|ReceiptStudent whereCreatedAt($value)
 * @method static Builder|ReceiptStudent whereDate($value)
 * @method static Builder|ReceiptStudent whereDebit($value)
 * @method static Builder|ReceiptStudent whereDescription($value)
 * @method static Builder|ReceiptStudent whereId($value)
 * @method static Builder|ReceiptStudent whereStudentId($value)
 * @method static Builder|ReceiptStudent whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Receipt extends Model
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
    protected $table = 'receipts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'student_id',
        'debit',
        'description',
    ];
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
