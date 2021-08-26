<?php

namespace App\Models;

use App\Traits\Uuids;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\StudentAccount
 *
 * @property int $id
 * @property string $date
 * @property string $type
 * @property int|null $invoice_id
 * @property int|null $receipt_id
 * @property int|null $processing_id
 * @property int|null $payment_id
 * @property int $student_id
 * @property string|null $debit
 * @property string|null $credit
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|StudentAccount newModelQuery()
 * @method static Builder|StudentAccount newQuery()
 * @method static Builder|StudentAccount query()
 * @method static Builder|StudentAccount whereCreatedAt($value)
 * @method static Builder|StudentAccount whereCredit($value)
 * @method static Builder|StudentAccount whereDate($value)
 * @method static Builder|StudentAccount whereDebit($value)
 * @method static Builder|StudentAccount whereDescription($value)
 * @method static Builder|StudentAccount whereFeeInvoiceId($value)
 * @method static Builder|StudentAccount whereId($value)
 * @method static Builder|StudentAccount wherePaymentId($value)
 * @method static Builder|StudentAccount whereProcessingId($value)
 * @method static Builder|StudentAccount whereReceiptId($value)
 * @method static Builder|StudentAccount whereStudentId($value)
 * @method static Builder|StudentAccount whereType($value)
 * @method static Builder|StudentAccount whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static Builder|StudentAccount whereInvoiceId($value)
 */
class StudentAccount extends Model
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
    protected $table = 'student_accounts';
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

}
