<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use RealRashid\SweetAlert\Facades\Alert;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8|max:12',
        ]);
        $email = $request->email;
        $password = Hash::make($request->password);
        $data = admin::where('email', $request->email)->first();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                session()->put('aemail', $data->email);
                //session()->put('uimage', $data->image);
                session()->put('aid', $data->id);
                Alert::success('Login Success', " Login Successfully");
                return redirect('/Admin-Dashboard');
            } else {
                Alert::error("Wrong password", "Please Enter Correct Password");
                return redirect("/admin_login");
            }
        } else {
            Alert::error("Admin not found", "Admin not found please check the detail ");
            return redirect("/admin_login");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
        return view("admin.dashboard");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
    public function logout()
    {
        session()->pull('aid');
        session()->pull('aemail');
        Alert::success('Logout', 'You are successfully logout');
        return redirect("/admin_login");
    }
}
