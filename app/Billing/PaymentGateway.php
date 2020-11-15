<?php
/**
 * Created by PhpStorm.
 * User: Abrorbek
 * Date: 11/9/2020
 * Time: 4:04 PM
 */

namespace App\Billing;


interface PaymentGateway
{
    public function charge($amount);

    public function setDiscount($amount);

}