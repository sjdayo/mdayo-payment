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
        $this->morphTo();
    }
    public function paymentProvider()
    {
        $this->belongsTo(PaymentProvider::class,'payment_provider_id');
    }
   
}