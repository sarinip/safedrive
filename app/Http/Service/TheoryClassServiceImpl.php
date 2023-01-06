<?php

namespace App\Http\Service;

use App\Http\Requests\TheoryClassRequest;
use App\Models\TheoryClass;
use App\Models\TheoryClassStudent;
use Illuminate\Support\Facades\DB;

class TheoryClassServiceImpl implements TheoryClassService
{

    public function store(TheoryClassRequest $request)
    {
        $path = "theory.list";
        $theory_class = null;
        $msg = 'Theory class add successfully!!';

        $class = TheoryClass::where('instructor_id', $request->instructor)->where('class_date', $request->classdate)->where('class_from_time', $request->classfrom)->first();

        if (!empty($class) && $class->id != $request->id) {
            return redirect()->back()->with('error_message', 'This class already scheduled!!');
        }


        try {
            // TODO: Implement store() method.
            if (!empty($request->id)) {
                $theory_class = TheoryClass::where('id', $request->id)->first();
                $msg = 'Theory class update successfully!!';
            } else {
                $theory_class = new TheoryClass();
            }

            $theory_class->instructor_id = $request->instructor;
            $theory_class->class_name = $request->classname;
            $theory_class->class_date = $request->classdate;
            $theory_class->class_from_time = $request->classfrom;
            $theory_class->class_to_time = $request->classto;
            $theory_class->class_head_count = $request->headcount;

            $theory_class->save();

        } catch (\Exception $e) {

            return redirect()->back()->with('error_message', $e->getMessage());
        }


        return redirect()->route($path)->with('success', $msg);
    }

    public function remove($id)
    {
        $path = "theory.list";

        // TODO: Implement remove() method.
        DB::beginTransaction();
        try {

            $theory_class = TheoryClass::where('id', $id)->first();
            $theory_class->delete();

            $class_students = TheoryClassStudent::where('theory_class_id', $id)->get();

            foreach ($class_students as $cs) {
                $cs->delete();
            }


            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error_message', $e->getMessage());
        }

        return redirect()->route($path)->with('success', 'Theory class remove successfully!!');
    }

    public function reserve($id)
    {
        // TODO: Implement reserve() method.
        $class = TheoryClass::where('id', $id)->first();

        $count = TheoryClassStudent::where('class_id', $id)->count();

        if ($class->class_head_count <= $count) {
            return redirect()->back()->with('validation_message', 'All sheets are booked'.'t - '.$count.' rr'.$class->class_head_count);
        }

        try {

            $student_class = new TheoryClassStudent();
            $student_class->class_id = $id;
            $student_class->student_id = session()->get('student_id')[0];
            $student_class->save();

        } catch (\Exception $e) {

            return redirect()->back()->with('error_message', $e->getMessage());
        }


        return redirect()->route('theory.class.attend')->with('success', 'Booked Class Successfully');
    }


    public function isReserved($id)
    {
        // TODO: Implement isReserved() method.
       return  TheoryClassStudent::where('student_id',session()->get('student_id')[0])->where('class_id',$id)->exsist();
    }

    public function viewTable()
    {
        $theoryclasses = Theoryclass::all();
        return view('admin.reporttheoryclass', ['theoryclasses' => $theoryclasses]);
    }
}