<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $user = User::firstWhere('name', $request->name);
        if (is_null($user) || $user->password !== $request->password) {
            return redirect()->route('login.index')->withErrors(['login' => 'Credentials is not valid.']);
        }

        Auth::login($user);

        return redirect()->route('cashier.index');
    }
}
