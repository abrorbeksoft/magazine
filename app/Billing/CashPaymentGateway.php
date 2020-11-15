<?php
/**
 * Created by PhpStorm.
 * User: Abrorbek
 * Date: 11/9/2020
 * Time: 1:42 PM
 */

namespace App\Billing;


use Illuminate\Support\Str;

class CashPaymentGateway  implements PaymentGateway
{
    private $currency;
    private  $discount;

    public function __construct($currency)
    {
        $this->currency=$currency;
        $this->discount=0;
    }

    public function setDiscount($discount)
    {
        $this->discount=$discount;
    }

    public function charge($amount)
    {
        return [
            'amout'=>$amount-$this->discount,
            'currency'=>$this->currency,
            'confirmation_number'=>Str::random(20),
            'discount'=>$this->discount
        ];
    }
}