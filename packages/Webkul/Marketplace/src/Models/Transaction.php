<?php

namespace Webkul\Marketplace\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Webkul\Marketplace\Contracts\Transaction as TransactionContract;

class Transaction extends Model implements TransactionContract
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'marketplace_transactions';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'type',
        'transaction_id',
        'method',
        'comment',
        'total',
        'base_total',
        'marketplace_seller_id',
        'marketplace_order_id',
    ];

    /**
     * Get the seller that owns the transaction.
     */
    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class, 'marketplace_seller_id');
    }

    /**
     * The orders that belong to the transaction.
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'marketplace_order_id');
    }
}
