<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminRegisterModel;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('backend.login');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
    }

    public function onLogin(Request $request)
    {

        $admin = AdminRegisterModel::where('email', $request->input('email'))->where('password', $request->input('password'))->first();
        if ($admin) {
            session()->put('id', $admin->id);
            session()->put('email', $admin->email);
            session()->put('password', $admin->password);
            return redirect('/admin')->with('success', 'Login Success');

        } else {
            return redirect('/Login')->with('error', 'Invalid Credentials.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function onLogin(Request $request)
    // {

    //     $admin = AdminLoginModel::where('email', $request->input('email'))->where('password', $request->input('password'))->first();
    //     if ($admin) {
    //         session()->put('id', $admin->id);
    //         session()->put('first_name', $admin->first_name);
    //         session()->put('last_name', $admin->last_name);
    //         session()->put('email', $admin->email);
    //         return redirect('/admin')->with('success', 'Login Success');

    //     } else {
    //         return redirect('admin/login')->with('error', 'Invalid Credentials.');
    //     }
    // }

    // public function logoutAdmin()
    // {

    //     session()->forget('id');
    //     session()->forget('first_name');
    //     session()->forget('last_name');
    //     session()->forget('email');
    //     return redirect('/admin/login')->with('success', 'Logout Success');

    // }

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
}
