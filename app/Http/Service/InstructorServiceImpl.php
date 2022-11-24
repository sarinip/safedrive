<?php

namespace App\Http\Service;

use App\Http\Requests\InstructorRequest;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Hashing\Hasher;


class InstructorServiceImpl implements InstructorService
{
    public function store(InstructorRequest $request): \Illuminate\Http\RedirectResponse
    {
        $path = 'login';

        try {
            $instructor = null;
            $user = null;
            if (!empty($request->id)) {
                $instructor = Instructor::where('id', $request->id)->first();
                $user = User::where('id', $instructor->user_id)->first();
                $path = '/instructor/profile';

            }

            if (empty($instructor)) {
                $newPassword = Hash::make($request->password);
                $user = new User();
                $user->name = $request->fname;
                $user->email = $request->email;
                $user->password = $newPassword;
                $user->save();
                $instructor = new Instructor();
            }
            $instructor->user_id = $user->id;
            $instructor->fname = $request->fname;
            $instructor->lname = $request->lname;
            $instructor->dob = $request->dob;
            $instructor->nic = $request->nic;
            $instructor->addressNo = $request->addressNo;
            $instructor->address1 = $request->address1;
            $instructor->address2 = $request->address2;
            $instructor->city = $request->city;
            $instructor->postcode = $request->postcode;
            $instructor->telephone = $request->telephone;

            $instructor->save();

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
            return redirect()->back();
        }

        return redirect()->route($path);
    }

    public function getInstructor($id)
    {
        // TODO: Implement getStudent() method.

        $instructor = Instructor::where('id', $id)->first();
        return view('instructor.profile', array('instructor' => $instructor));
    }
}