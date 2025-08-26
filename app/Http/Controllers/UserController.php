<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = user::find(session('uid'));
        return view('user.index', ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('user.signup');
    }

    public function login()
    {
        return view('user.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|unique:users',
            'phone' => 'required|unique:users|min:10',
            'password' => 'required|min:8|max:12',
            'password_confirmation' => 'required|min:8|max:12',
        ]);

        $input = new user;
        if ($request->password === $request->password_confirmation) {
            $input->fullname = $request->fullname;
            $input->email = $request->email;
            $input->phone = $request->phone;
            $input->password = Hash::make($request->password);

            $input->save();

            Alert::success('Register Success', "User Register Successful");
            return redirect('/Login');
        } else {
            alert::error('Password Not Match', "Please enter matching password");
            return redirect('/signup');
        }
    }

    public function loginauth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8|max:12',
        ]);
        // $login = new user;
        $email = $request->email;
        $password = Hash::make($request->password);
        $data = user::where('email', $request->email)->first();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                session()->put('uemail', $data->email);
                //session()->put('uimage', $data->image);
                session()->put('uid', $data->id);
                Alert::success('Login Success', "User Login Successfully");
                return redirect('/Profile');
            } else {
                Alert::error("Wrong password", "Please Enter Correct Password");
                return redirect("/Login");
            }
        } else {
            Alert::error("User not found", "User not found please check the detail ");
            return redirect("/Login");
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    public function profile(user $user)
    {
        $data = user::where('email', session()->get('uemail'))->first();



        return view('user.profile', ["data" => $data]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user, $id)
    {
        //
        $data = user::find($id);
        return view('user.edit', ["data" => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user, $id)
    {
        //
        $data = user::find($id);
        //$update = new user;

        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->gender = $request->gender;

        if ($request->hasFile('profile_photo')) {
            if($data->proffile_photo!=""){
                unlink('users/' . $data->profile_photo);
            }
            
            $file = $request->file('profile_photo');
            $filename = time() . '_img.' . $request->file('profile_photo')->getClientOriginalExtension();
            $file->move('users/', $filename);  // use move for move image in public/images
            $data->profile_photo = $filename;
        }
        $data->update();
        Alert::success('Update Success', "User Update Successful");
        return redirect('/Profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
    public function logout()
    {
        session()->pull('uid');
        session()->pull('uemail');
        Alert::success('Logout', 'You are successfully logout');
        return redirect("/Login");
    }
}
