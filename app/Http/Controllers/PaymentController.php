<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(OrderDetails $orderDetails, PaymentGateway $paymentGateway)
    {
        $orderDetails->all();
        dd($paymentGateway->charge(2500));
    }
}
