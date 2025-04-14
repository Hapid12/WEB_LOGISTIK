<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Auth.login');
    }

    public function showRegisterForm()
    {
        return view('Auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Berhasil registrasi. Silakan login!');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // penting untuk keamanan
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // fungsi untuk profile
    public function profile()
    {
        $data = [
            'title' => 'Profile',
        ];
        return view('page/profile', $data);
    }

    // fungsi untuk update isi profile
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

    $request->validate([
        'username' => [
            'required', 'string', 'max:255',
            Rule::unique('users')->ignore($user->id),
        ],
        'email' => [
            'required', 'email', 'max:255',
            Rule::unique('users')->ignore($user->id),
        ],
        'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
    ]);

    $user->username = $request->username;
    $user->email = $request->email;

    if ($request->hasFile('photo')) {
        $filename = time() . '.' . $request->photo->extension();
        $request->photo->storeAs('public', $filename);
        $user->photo = $filename;
    }

    $user->save();

    return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');
    }
    
}
