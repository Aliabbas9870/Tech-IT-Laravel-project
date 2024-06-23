<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminContactModel;
use App\Models\backend\AdminRegisterModel;
use App\Models\backend\Admins;
use App\Models\backend\Projects;
use App\Models\frontend\FaqsModel;
use App\Models\frontend\SubscribeModel;
// use App\Models\backend\AdminsContact;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function home()
    {

        if (session()->has('email')) {
            // if($request->session()->exists('email')){
            // dd('Yes');
            $Name = session('first_name') . " " . session('last_name');
            $TotalAdmins = AdminRegisterModel::count();
            $TotalFAQs = FaqsModel::count();
            $TotalProject= Projects ::count();
            return view('backend.home', compact('Name', 'TotalAdmins', 'TotalFAQs','TotalProject'));

        } else {
            return view('backend.login');
        }

    }
    public function index()
    {

        if (session()->has('email')) {
            // if($request->session()->exists('email')){
            // dd('Yes');
            $Name = session('first_name') . " " . session('last_name');
            $TotalAdmins = AdminRegisterModel::count();
            $TotalProject= Projects ::count();
            $TotalFAQs = FaqsModel::count();
            $TotalSubscribe=SubscribeModel::count();
            $ToatalContact = AdminContactModel ::count();
            return view('backend.home', compact('Name', 'TotalAdmins', 'TotalFAQs','TotalProject','ToatalContact','TotalSubscribe'));

        } else {
            return view('backend.login');
        }

    }

    public function registerAdmin()
    {
        $url = url('/admin/register');
        $data = compact('url');
        return view('backend.admin-add')->with($data);
    }

    public function submitAdminRecord(Request $request)
    {
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required',
                'contact' => 'required',
            ]
        );
        $admin = new Admins();
        $admin->first_name = $request['first_name'];
        $admin->last_name = $request['last_name'];
        $admin->email = $request['email'];
        $admin->contact = $request['contact'];
        $admin->password = $request['password'];
        // $admin->password = md5($request['password']);
        $admin->status = 1;
        $admin->save();
        return redirect('/admin/admins-list');
    }

    public function showAdminRecord()
    {

        $admins = Admins::all();

        // Calling the helper function for testing data
        //testData($admins);

        //     echo "<pre>";
        //     print_r($admins->toArray()); //toArry runs only when we have some data in DB
        //    echo  "</pre>";
        //     die;
        $data = compact('admins');
        return view('backend/admins-list')->with($data);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteAdminRecord(string $id)
    {
        $data = Admins::find($id);
        if (!is_null($data)) {
            $data->delete();
        }
        $data = compact('admins');
        return view('backend/admins-list')->with($data);

    }

    public function editAdminRecord($id)
    {

        $data = Admins::find($id);
        if (is_null($data)) {
            return view('backend.admins-list');
        } else {
            $url = url('/admin/update') . "/" . $id;
            $data = compact('admins', 'url');
            return view('backend.admin-add')->with($data);
        }

    }

}
