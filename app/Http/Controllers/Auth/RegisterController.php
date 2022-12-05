<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class RegisterController extends Controller
{
    public function registration()
    {
        return view('Backend.registration');
    }

    public function register(Request $request)
    { {
             $validate = $request->validate([
                'email' => 'email',
                'type' => 'required',
                'bcn' => 'required',
                'password' => 'required| min:8 | max:12'
            ]);
            $admin = Registration::where('email', $request->email)
                ->first();



            if ($admin) {
                $request->session()->flash('reg', 'This account already exists');
                return redirect()->route('registration');
            } else {
                $admin = new  Registration();
                $admin->email = $request->email;
                $admin->type = $request->type;
                $admin->bcn = $request->bcn;
                $admin->password = $request->password;
                $admin->status = "incomplete";
                // $admin->save();
                // $code = rand(1000, 9000);
                // $details = [
                //     'title' => 'Registration Confirmation',
                //     'code' => $code
                // ];
                // $admin->otp = $code;

                $admin->save();
                 //return redirect()->route('login');
                 echo "done";
            }
        }
    }
    public function studentview()
    {
        return view('Auth.student');
    }

public function studentsub()
    {
       return redirect()->route('login');
    }
     public function teacherview()
    {
        return view('Auth.teacher');
    }

public function teachersub()
    {
       return redirect()->route('login');
    }
}
