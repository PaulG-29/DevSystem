<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{

    public function index()
    {
        return 'Hello from UserController';
    }

    public function main()
    {
        if(View::exists('index'))
        {
            return view('index');
        }else{
            return abort(404);
        }
    }

    public function login()
    {

        return view('login.main', [
            'layout' => 'login'
        ]);
        // if(View::exists('login.main'))
        // {
        //     return view('login.main', ['layout'=>'login']);
        // }else{
        //     return abort(404);
        // }
    }

    public function process(Request $request)
    {
        $validated = $request->validate
        (
            ["email" => ['required', 'email'],
             'password'=> 'required'
            ]
        );

        if(auth()->attempt($validated))
        {
            $request->session()->regenerate();

            
            return redirect('/')->with('message', 'Welcome back! ' . $validated['email']);
        }

        return back()->withErrors(['email' => 'Login failed'])->onlyInput('email');
    }

    public function register()
    {
        return view('login.register', [
            'layout' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate
        (
            ["first_name" => ['required'],
             "last_name" => ['required'],
             "email" => ['required', 'email', Rule::unique('users', 'email')],
             'password'=> 'required|confirmed|min:6'
            ]
        );
        
        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        Auth::login($user);
            
        return redirect(RouteServiceProvider::HOME)->with('message', 'Welcome new registered user!');
        // auth()->login($user); 

    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
  
        return redirect('/index')->with('message', 'Logout successful');
    }
}
