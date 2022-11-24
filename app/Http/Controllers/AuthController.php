<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        //
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if(is_null($user)){
            return redirect()->back()->with('auth_error_message', "Email not found!!");
        }

        if (Auth::attempt($credentials)) {

            $student = Student::where('user_id',$user->id)->first();
            $instructor = Instructor::where('user_id',$user->id)->first();

            $request->session()->regenerate();
            $request->session()->push('user', $user);

            if(!empty($student)){
                $request->session()->push('student_id', $student->id);
            }

            if(!empty($instructor)){
                $request->session()->push('instructor_id', $instructor->id);
            }

            if ($user->role == 'INSTRUCTOR'){
            return redirect()->route("instructor.schedule");
            }

            return redirect()->route("dashboard");

        }

        return redirect()->back()->with('auth_error_message','Authentication failed !');

    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->flush();

        session()->regenerateToken();

        return redirect('/');
    }

}
