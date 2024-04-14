<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function register(Request $request)
    {
      $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:8',
      ]);

      $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);

      Auth::login($user);

      return redirect()->route('main');
    }

    public function login(Request $request)
    {
      $request->validate([
        'email' => 'required|email',
        'password' => 'required',
      ]);

      if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->route('main');
      }

      return back()->with('error', 'Предоставленные учетные данные не соответствуют нашим записям.');
    }

    public function logout(Request $request)
    {
      Auth::logout();

      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect()->route('main');
    }
}
