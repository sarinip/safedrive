<?php

namespace App\Http\Service;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Support\Facades\Hash;

class StudentServiceImpl implements StudentService
{

    public function store(StudentRequest $request): \Illuminate\Http\RedirectResponse
    {
        // TODO: Implement store() method.
        $path = 'login';

        try {

            $student = null;
            $user=null;

            if(!empty($request->id)){
                $student = Student::where('id',$request->id)->first();
                $user = User::where('id',$student->user_id)->first();
                $path = '/student/profile';
            }



            if(empty($student)){
                $newPassword = Hash::make($request->password);

                $user = new User();
                $user->name  = $request->fname;
                $user->email = $request->email;
                $user->password = $newPassword;

                $user->save();

                $student = new Student();
            }

            $student->user_id= $user->id;
            $student->fname = $request->fname;
            $student->lname = $request->lname;
            $student->dob = $request->dob;
            $student->nic = $request->nic;
            $student->addressNo = $request->addressNo;
            $student->address1 = $request->address1;
            $student->address2 = $request->address2;
            $student->city = $request->city;
            $student->postcode = $request->postcode;
            $student->telephone = $request->telephone;

            $student->save();


        }catch (\Exception $e){

            throw new \Exception($e->getMessage());

            return redirect()->back();
        }


        return redirect()->route($path);
    }

    public function getStudent($id)
    {
        // TODO: Implement getStudent() method.
    }
}
