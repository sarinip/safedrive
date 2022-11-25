<?php

namespace App\Http\Service;

use App\Http\Requests\ExamRequest;
use App\Models\Exam;
use App\Models\Student;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Support\Facades\Hash;

class ExamServiceImpl implements ExamService
{

    public function store(ExamRequest $request): \Illuminate\Http\RedirectResponse
{
        // TODO: Implement store() method.
            $path = 'exam.new';
             throw new \Exception();

            try {

            $exam = null;

                    if(!empty($request->id)){
                    $exam = Exam::where('id',$request->id)->first();
                    }

                if(empty($exam)){

                    $exam = new Exam();
                }
                $exam->student_id= $request->studentid;
                $exam->exam_type= $request->examtype;
                $exam->date = $request->date;
                $exam->time = $request->time;
                $exam->status = $request->status;

                $exam->save();
                return redirect()->back()->with('success', "Record saved Successfully!!");

            }catch (\Exception $e){

                throw new \Exception($e->getMessage());
            }


            return redirect()->route($path);
    }

    public function getExam($id)
    {
        // TODO: Implement getExam() method.

        $exam = Exam::where('id',$id)->first();
            return view('admin.examupdate', array('exam'=>$exam));
        }

        public function viewExam()
        {
            $exams= Exam::all();
            return view('admin.examnew', array('exams'=>$exams));
        }

        public function deleteExam($id)
        {
        $exam = Exam::where('id',$id)->first();
        $exam->delete();
            return redirect()->back()->with('success', "Record deleted Successfully!!");
        }

        public function viewTable()
        {
        $exams=Exam::all();
        return view('admin.reportexam',['exams'=>$exams]);
        }
}