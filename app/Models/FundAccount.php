<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereDebit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereReceiptId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FundAccount extends Model
{
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

}
