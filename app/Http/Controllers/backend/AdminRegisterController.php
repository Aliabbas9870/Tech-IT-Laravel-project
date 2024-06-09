<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\backend\AdminRegisterModel;
use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.adminregister');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

        $users = new AdminRegisterModel;
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->username = $request['username'];
        $users->password = ($request['password']);
        $users->save();
        return redirect('/admin')->with('success', 'Account created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}
