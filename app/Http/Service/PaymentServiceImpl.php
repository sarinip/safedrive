<?php

namespace App\Http\Service;
use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use App\Models\Student;

class PaymentServiceImpl implements PaymentService
{

    public function store(PaymentRequest $request): \Illuminate\Http\RedirectResponse
        {
        $payment=null;
        $path = 'reciept';                  
              
            $payment = new Payment();
            $payment->student_id =$request->studentid;
            $payment->amount = $request->amount;
            $payment->card_name= $request->cardname;
            $payment->card_number= $request->cardnumber;
            $payment->exp_date= $request->cardnumber;
            $payment->cvv= $request->cvv;
            
            $payment->save();

        return redirect()->route($path);
        }
        

    public function getPayment($id)
        {
      // TODO: Implement getPayment() method.
     
            $payment = Payment::where('id',$id)->first();
            return view('student.reciept', array('payment'=>$payment));
        }
}
?>