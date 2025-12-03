<?php
namespace Mdayo\Payment\Models;
use Illuminate\Database\Eloquent\Model;
use Mdayo\Payment\Models\Traits\HasStatus;

class PaymentAccount extends Model
{
    use HasStatus;

    protected $guarded = [];
    public function owner()
    {
        return $this->morphTo();
    }
    public function paymentProvider()
    {
        return $this->belongsTo(PaymentProvider::class,'payment_provider_id');
    }
   
}