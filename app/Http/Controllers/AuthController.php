<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
        
    }

    public function login_check(Request $request)
    {

        $credential = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|max:255',
        ]);


        if( Auth::attempt(['email'=> $credential['email'], 'password'=> $credential['password']]) )
        {
            // if(Auth::user()->status_id == 1)
            // {
            //   return back()->with('error','Account is Suspended, Please contact Administrator');  
            // }
            // $log = new Logged;
            // $log->user_id = Auth::user()->id;
            // $log->action = 'logged in';
            // $log->save();

            if( Auth::user()->hasRole('USER') )
            {
                return redirect()->route('users');
            }else 
            {
                return redirect()->route('home_admin');
            }


           
            
            
        }

        return back()->with('error','Invalid Credentials..');
        
    }

    public function logout()
    {
        

        // $log = new Logged;
        // $log->user_id = Auth::id();
        // $log->action = 'logged out';
        // $log->save();

        Auth::logout();
        return redirect('/login');
    }

    public function register()
    {
        return view('register');
    }

    public function register_check(Request $request)
    {
        
        $credential = $request->validate([
            
            'medical_condition'        => 'required|max:255',
            'current_medication'        => 'required|max:255',
            'counselling'        => 'required|max:255',
            'course'        => 'required|max:255',
            'year'        => 'required|max:255',
            'gender'        => 'required|max:255',
            'location'        => 'required|max:255',
            'first_name'        => 'required|max:255',
            'middle_initial'    => 'required|max:255',
            'last_name'         => 'required|max:255',
            'email'             => 'required|max:255|email|unique:users',
            'contact'           => 'required|max:255||unique:users|max:15',
            'password'          => 'required|max:255|min:6',
            'repeat_password'   => 'required|max:255|same:password',
        ]);
        unset($credential['password']);
        unset($credential['repeat_password']);
        
        $credential['password'] = bcrypt($request->password);
        

       


        DB::beginTransaction();

        try {
            $user = User::create($credential);

           
            $user->assignRole('ADMIN');

            DB::commit();
            return back()->with('success','Successfully Registered!');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Something went wrong. Register Again!');
        }


        
       

    }
}
