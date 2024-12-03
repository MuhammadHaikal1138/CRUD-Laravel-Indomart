<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.register'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'email|unique:users,email',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Nama Harus Diisi!',
            'name.min' => 'Nama minimal 3 karakter!',
            'email.email' => 'Email Harus Valid!',
            'password.required' => 'Password Harus Diisi!',
            'password.min' => 'Password minimal 6 karakter!',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $users = User::all();
        if ($users) {
            return redirect()->route('show.login')->with('success', 'Berhasil Membuat Akun Silahkan Log In');
        } else {
            return redirect()->back()->with('failed', 'Gagal Membuat Akun!!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function showLogin(){
        return view('pages.login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function login(Request $request){
        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('failed', 'Gagal Login!!');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('show.login')->with('success', 'Berhasil Logout!');
    }
}
