<?php
/**
 * Created by PhpStorm.
 * User: Abrorbek
 * Date: 11/9/2020
 * Time: 1:57 PM
 */

namespace App\Orders;


use App\Billing\PaymentGateway;

class OrderDetails
{
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway=$paymentGateway;
    }

    public function all()
    {
        $this->paymentGateway->setDiscount(500);
        
        return [
            'name'=>'John Doe',
            'address'=>'Bakery street'
        ];
    }

}
