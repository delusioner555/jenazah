<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate(  [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ],   [
            'email.required' => 'Email wajib e essee.',
            'email.email' => 'Format email tak genna. pagenna.',
            'password.min' => 'Password eangghuy min 8 karakter.',
            'password.confirmed' => 'Password pon pernah eangguy. nyare laen.',
            'password.required' => 'Password wajib e essee.'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($infologin)) {
            return redirect()->route('dashboard.index');
        } else {
            return back()->with('error', 'Emailla otabe paswoddhe potlopot. pagenna')->withInput();
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ], [
            'name.required' => 'Nyama ampon bedeh.',
            'email.required' => 'Email pon eangghuy.',
            'email.email' => 'Email kodhu aropa @ se valid.',
            'email.unique' => 'Email pon siap eangghuy.',
            'password.required' => 'Password kalero.',
            'password.confirmed' => 'Passwords tak tabitong.',
            'password.min' => 'pasworddhe tak olle korang deri 8'
        ]);

        try {
            $user = new \App\Models\User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return redirect()->route('login')->with('sukses', 'Registrasiepon ampon sukses. sampean bisa maso');
        } catch (\Exception $e) {
            return back()->with('error', 'Registrasi gagal: ' . $e->getMessage())->withInput();
        }
    }
}
