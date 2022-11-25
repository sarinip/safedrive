<?php

namespace App\Http\Service;

use App\Models\Payment;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class ReportServiceimpl implements ReportService
{

    public static function getStudentRegistrationData()
    {
        // TODO: Implement getStudentRegistrationData() method.
        $data = Student::select(DB::raw("count(*) as num_of_students") ,DB::raw("month(created_at) as mon")  )->groupBy(DB::raw("month(created_at)"))->orderBy(DB::raw("month(created_at)"))->get();

        $data_arr = array();


        for ($i =1 ; $i < 13 ; $i++ ){
            $val = 0;
            foreach ($data as $d){
                if ($d->mon == $i){
                    $val = $d->num_of_students;
                }
            }
            array_push($data_arr,$val);
        }

        return json_encode($data_arr);

    }

    public static function getPaymentData()
    {
        // TODO: Implement getPaymentData() method.
        $data = Payment::select(DB::raw("sum(Amount) as total_amount") ,DB::raw("month(created_at) as mon")  )->groupBy(DB::raw("month(created_at)"))->orderBy(DB::raw("month(created_at)"))->get();

        $data_arr = array();


        for ($i =1 ; $i < 13 ; $i++ ){
            $val = 0;
            foreach ($data as $d){
                if ($d->mon == $i){
                    $val = $d->total_amount;
                }
            }
            array_push($data_arr,$val);
        }

        return json_encode($data_arr);
    }
}
