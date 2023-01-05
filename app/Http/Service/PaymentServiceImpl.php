<?php

namespace App\Http\Service;

use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use App\Models\Student;
use App\Models\User;

class PaymentServiceImpl implements PaymentService
{

    private $email_service;

    /**
     * @return mixed
     */
    public function __construct()
    {
        $this->email_service = new EmailServiceImpl();
    }

    public function store(PaymentRequest $request): \Illuminate\Http\RedirectResponse

    {
        $path = 'reciept';

        $payment = new Payment();
        $payment->student_id = session()->get('student_id')[0];
        $payment->amount = $request->amount;
        $payment->card_name = $request->cardname;
        $payment->card_number = $request->cardnumber;
        $payment->exp_date = $request->cardnumber;
        $payment->cvv = $request->cvv;

        $payment->save();

        $student = Student::where('id', $payment->student_id)->first();
        $user = User::where('id', $student->user_id)->first();
        $user->status = 'PAID';
        $user->save();


        session()->remove('user');
        session()->push('user', $user);

        $this->email_service->sendPaymentStatusEmail($payment, $student);

        return redirect('/reciept/' . $payment->id);
    }


    public function getPayment($id)
    {
        // TODO: Implement getPayment() method.

        $payment = Payment::where('id', $id)->first();
        return view('student.reciept', array('payment' => $payment));
    }

    public function viewPayment()
    {
        $payments = Payment::all();
        return view('student.dashboard', array('payments' => $payments));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function deletePayment($id)
    {
        $payment = Payment::where('id', $id)->first();
        $payment->delete();
        return redirect()->back()->with('success', "Record deleted Successfully!!");
    }

    public function viewTable()
    {
        $payments = Payment::all();
        return view('admin.reportpayment', ['payments' => $payments]);
    }
}
