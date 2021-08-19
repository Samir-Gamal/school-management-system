<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereDebit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereFeeInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereProcessingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereReceiptId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereInvoiceId($value)
 */
class StudentAccount extends Model
{
    use Uuids;
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
