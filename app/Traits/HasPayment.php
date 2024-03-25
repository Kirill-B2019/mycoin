<?php

namespace App\Traits;

use App\Models\OrderStatus;
use App\Models\Payment;
use Illuminate\Support\Facades\Mail;

trait HasPayment
{
 public function getPayment($user)
     {
         return Payment::query()->where('user_id',$user->id)->get();
     }

 public function addPayment($user,$currency_id,$index,$amount): Payment
 {
          $orderStatus = OrderStatus::query()->where('slug','New')->first();
          $payment = new Payment();
          $payment->user_id = $user->id;
          $payment->currency_id = $currency_id;
          $payment->amount = $amount;
          $payment->trnx = $index;
          $payment->order_status_id = $orderStatus->id;
          $payment->save();


            // Отправка письма
     $payment = Payment::with('currency')->find($payment->currency_id);

     if ($payment) {
         $currency_name = $payment->currency->name;
     } else {
         $currency_name = ''; // или другое значение по умолчанию, если платеж не найден
     }

             Mail::send('project.emails.newPayment', ['user' => $user, 'payment' => $payment, 'currency_name' => $currency_name], function ($message) use ($payment, $user) {
                 $message->to($user->email, $user->name)->subject('Ваш платеж в размере '.$payment->amount.' принят в обработку');
             });
     return $payment;
 }


}
