<?php

namespace App\Traits;

use App\Models\OrderStatus;
use App\Models\Payment;

trait HasPayment
{
 public function getPayment($user)
     {
         return Payment::query()->where('user_id',$user->id)->get();
     }

 public function addPayment($user,$currency_id=1,$index,$amount)
      {
          $orderStatus = OrderStatus::query()->where('slug','New')->first();
          $payment = new Payment();
          $payment->user_id = $user->id;
          $payment->currency_id = $currency_id;
          $payment->amount = $amount;
          $payment->trnx = $index;
          $payment->order_status_id = $orderStatus->id;
          $payment->save();

     return 'addPayment';
 }


}
