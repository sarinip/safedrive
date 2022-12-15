<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
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

        if (is_null($user)) {
            return redirect()->back()->with('auth_error_message', "Email not found!!");
        }

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            $request->session()->push('user', $user);


            if ($user->role == 'INSTRUCTOR') {
                $instructor = Instructor::where('user_id', $user->id)->first();
                $request->session()->push('instructor_id', $instructor->id);
                return redirect()->route("instructor.schedule");
            }

            if ($user->role == 'STUDENT') {

                $now = Carbon::now();
                $created = Carbon::parse($user->created_at);

                if ($now->diffInDays($created) > 90) {
                    return redirect()->back()->with('auth_error_message', "Your account locked");
                }

                $student = Student::where('user_id', $user->id)->first();
                $request->session()->push('student_id', $student->id);
                return redirect()->route("dashboard");
            }

            if ($user->role == 'ADMIN') {
                return redirect()->route("admin.dashboard");
            }

        }

        return redirect()->back()->with('auth_error_message', 'Authentication failed !');

    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->flush();

        return redirect('/');
    }

}
