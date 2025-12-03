<?php
namespace Mdayo\Payment\Models\Traits;
use Mdayo\Payment\Models\PaymentAccount;

trait HasPaymentAccount
{
    
    public function paymentAccount()
    {
      return $this->morphOne(PaymentAccount::class,'owner');
    }
    public function paymentAccounts()
    {
        return $this->morphMany(PaymentAccount::class,'owner');
    }
}