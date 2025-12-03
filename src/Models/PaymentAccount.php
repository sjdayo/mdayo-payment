<?php
namespace Mdayo\Payment\Models;
use Illuminate\Database\Eloquent\Model;


class PaymentAccount extends Model
{
    protected $guarded = [];
    public function owner()
    {
        $this->morphTo();
    }
    public function provider()
    {
        $this->belongsTo(PaymentProvider::class,'payment_provider_id');
    }
}