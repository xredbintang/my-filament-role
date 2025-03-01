<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunSiswa;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'password' => 'required',
        ]);

        $siswa = AkunSiswa::where('nis', $request->nis)->first();

        if (!$siswa || !Hash::check($request->password, $siswa->password)) {
            return back()->withErrors(['loginError' => 'NIS atau password salah.']);
        }

        Session::put('siswa_id', $siswa->id);
        Session::put('siswa_nama', $siswa->nama);

        return redirect()->route('dashboard.siswa');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }
}
