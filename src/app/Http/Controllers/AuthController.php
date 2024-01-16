<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(){
        return view(
            'auth.register',
            [
                'title' => 'Register'
                ]
        );
    }

    public function store(Request $request)
    {
        // Validation logic here if needed
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        // You can customize the logic after registration, e.g., log in the user, send email verification, etc.

        return redirect('login'); // Redirect to the desired page after registration
    }
    public function login()
{

 return view(
 'auth.login',
 [
 'title' => 'Login'
 ]
 );
}
public function authenticate(Request $request)
{
 $credentials = $request->only('name', 'password');
 if (Auth::attempt($credentials)) {
 $request->session()->regenerate();
 return redirect('');
 }
 return back()->withErrors([
 'name' => 'Authentication error',
 ]);
}

public function logout(Request $request)
{
 Auth::logout();
 $request->session()->invalidate();
 $request->session()->regenerateToken();
 return redirect('/');
}
}
