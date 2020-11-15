<?php
/**
 * Created by PhpStorm.
 * User: Abrorbek
 * Date: 11/9/2020
 * Time: 4:06 PM
 */

namespace App\Billing;


use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGateway
{
    private $currency;
    private $discount;

    public function __construct($currency)
    {
        $this->currency=$currency;
    }

    public function setDiscount($amount)
    {
        $this->discount=$amount;
    }

    public function all($amount)
    {
        $this->discount=$amount;
    }

    public function charge($amount)
    {

        $fees=$amount*0.3;
        
        return [
            'amount'=> ($fees-$this->discount)+$fees,
            'confirmation_number'=>Str::random(),
            'discount'=>$this->discount,
            'currency'=>$this->currency,
            'fees'=>$fees
        ];
    }


}