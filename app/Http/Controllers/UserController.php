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
            $request->remember;
            
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
             'password'=> 'required|confirmed|min:6',
             'photo'=> 'nullable',
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
  
        return redirect('/login')->with('message', 'Logout successful');
    }

    public function profile()
    {
        return view('pages.profile')->with('title','Profile');
    }
    
    public function changepassword()
    {
        return view('pages.changepass')->with('title','Change Password');;
    }

    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("message", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("message", "Password changed successfully!");
    }

    public function updateProfile(Request $request, User $user)
    {
        $user = User::findorfail($request->id);
        $user -> first_name = $request-> first_name;
        $user -> last_name = $request -> last_name;
        $user -> email = $request-> email;

        $user->update();

        return back()->with('message', 'Data was successfully updated');
    }

    public function updatePhoto(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        User::create($requestData);
        
        return redirect('/profile')->with('flash_message', 'Employee Addedd!');  
    }
}
