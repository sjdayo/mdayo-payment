<?php
namespace Mdayo\Payment\Models\Traits;
use Mdayo\Payment\Models\PaymentAccount;
use Mdayo\Payment\Models\PaymentProvider;

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
    public function createPaymentAccount(PaymentProvider $payment_provider,string $account_number, string $account_holder_name)
    {
        return $this->paymentAccount()->firstOrCreate([
            'payment_provider_id'=>$payment_provider->id,
            'payment_provider_type'=>$payment_provider::class,
            'account_number'=>$account_number,
        ],['account_holder_name'=> $account_holder_name]);
    }
}