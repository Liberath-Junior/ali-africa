<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $admin = Admin::where('email', $credentials['email'])
            ->where('is_active', true)
            ->first();

        if (!$admin || !Hash::check($credentials['password'], $admin->password_hash)) {
            return back()
                ->withErrors([
                    'email' => 'Invalid email or password.',
                ])
                ->withInput();
        }

        $request->session()->regenerate();

        $request->session()->put('admin_id', $admin->id);

        $admin->update([
            'last_login_at' => now(),
        ]);

        return redirect()->route('admin.orders.index');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin_id');

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
