<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        //dd($request->all(), DB::table('admins')->get());

        $admin = DB::table('admins')
            ->where('email', $request->email)
            ->where('password', $request->password) // ⚠️ sementara tanpa hash
            ->first();

        if ($admin) {
            session(['admin_name' => $admin->nama]);
            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Email atau password salah!');
    }

    public function dashboard()
    {
        if (!session('admin_name')) {
            return redirect('/admin/login');
        }

        $adminName = session('admin_name');
        return view('admin.dashboard', compact('adminName'));
    }

    public function logout()
    {
        session()->forget('admin_name');
        return redirect('/admin/login');
    }
}
