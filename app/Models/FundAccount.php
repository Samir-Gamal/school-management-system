<?php

namespace App\Models;

use App\Traits\Uuids;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\FundAccount
 *
 * @property int $id
 * @property string $date
 * @property int|null $receipt_id
 * @property int|null $payment_id
 * @property string|null $debit
 * @property string|null $credit
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|FundAccount newModelQuery()
 * @method static Builder|FundAccount newQuery()
 * @method static Builder|FundAccount query()
 * @method static Builder|FundAccount whereCreatedAt($value)
 * @method static Builder|FundAccount whereCredit($value)
 * @method static Builder|FundAccount whereDate($value)
 * @method static Builder|FundAccount whereDebit($value)
 * @method static Builder|FundAccount whereDescription($value)
 * @method static Builder|FundAccount whereId($value)
 * @method static Builder|FundAccount wherePaymentId($value)
 * @method static Builder|FundAccount whereReceiptId($value)
 * @method static Builder|FundAccount whereUpdatedAt($value)
 * @mixin Eloquent
 */
class FundAccount extends Model
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
    protected $table = 'fund_accounts';
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
