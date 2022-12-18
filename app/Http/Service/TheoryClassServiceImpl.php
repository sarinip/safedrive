<?php

namespace App\Http\Service;

use App\Http\Requests\TheoryClassRequest;
use App\Models\TheoryClass;

class TheoryClassServiceImpl implements TheoryClassService
{

    public function store(TheoryClassRequest $request)
    {
        $path = "theory.class";

        $class = TheoryClass::where('instructor_id', $request->instructor)->where('session_date', $request->classdate)->where('session_from_time', $request->fromtime);

        if (!empty($class)) {
            return redirect()->back()->with('error_message', 'This class already scheduled!!');
        }

        $theory_class = null;
        try {
            // TODO: Implement store() method.
            if (!empty($request->id)) {
                $theory_class = TheoryClass::where('id', $request->id)->first();
            } else {
                $theory_class = new TheoryClass();
            }

            $theory_class->instructor_id = $request->instructor;
            $theory_class->session_name = $request->classname;
            $theory_class->session_date = $request->classdate;
            $theory_class->session_from_time = $request->fromtime;
            $theory_class->session_to_time = $request->totime;
            $theory_class->student_count = $request->count;

            $theory_class->save();

        } catch (\Exception $e) {

            return redirect()->back()->with('error_message', $e->getMessage());
        }


        return redirect()->route($path)->with('success', 'Theory class add successfully!!');
    }

    public function remove($id)
    {
        $path = "theory.list";

        // TODO: Implement remove() method.
        try {

            $theory_class = TheoryClass::where('id', $id)->first();
            $theory_class->delete();

        } catch (\Exception $e) {
            return redirect()->back()->with('error_message', $e->getMessage());
        }

        return redirect()->route($path)->with('success', 'Theory class remove successfully!!');
    }
}
