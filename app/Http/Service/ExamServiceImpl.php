<?php

namespace App\Http\Service;

use App\Http\Requests\ExamRequest
use App\Models\Exam;
use App\Models\Student;
use Illuminate\Contracts\Hashing\Hasher
use Illuminate\Support\Facades\Hash;

class ExamServiceImpl implements ExamService
{

    public function store(ExamRequest $request): \Illuminate\Http\RedirectResponse
{
        // TODO: Implement store() method.
            $path = 'login';

            try {

            $exam = null;

                    if(!empty($request->id)){
                    $exam = Exam::where('id',$request->id)->first();
                    $path = '/instructor/vehicle';
                    }

                if(empty($exam)){

                    $exam = new Exam();
                }
                $exam->student_id= $student->id;
                $exam->exam_type= $request->examtype;
                $exam->date = $request->date;
                $exam->reg_datetime = $request->time;
                $exam->status = $request->status;

                $exam->save();


            }catch (\Exception $e){

                throw new \Exception($e->getMessage());

            return redirect()->back();
            }


            return redirect()->route($path);
    }

    public function getVehicle($id)
    {
        // TODO: Implement getVehicle() method.

        $exam = Exam::where('id',$id)->first();
            return view('Vehicle.vehicleupdate', array('exam'=>$exam));
        }

        /**
    * Show the specified resource.
    * @param int $id
    * @return Response
     */
        public function viewExam(Vehicle $vehicle)
        {
            $exam= Exam::(all);
            return view('/Examupdate')-> with('exam',$exam);
        }
        /**
    * Remove the specified resource from storage.
    *  @param int $id
    * @return Response
    */
        public function deletexam(Exam $exam){
            $exam->delete();
            return redirect('/exam');
        }
}