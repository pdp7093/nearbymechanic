<?php

namespace App\Http\Controllers;

use App\Models\repairers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RepairersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('repairer.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('repairer.register');
    }
    public function login()
    {
        //
        return view('repairer.login');
    }
    //
    public function loginauth(Request $request){
         $validated = $request->validate([
            'email'=>'required',
            'password' => 'required|min:8|max:12',
            
        ]);
        $data = repairers::where('email',$request->email)->first();
        if($data){
            if(Hash::check($request->password,$data->password)){
                session()->put('remail',$data->email);
                //

                session()->put('rid',$data->id);
                Alert::success('Login Success',"Login Successfully done");
                return redirect('/Repairer-dashboard');
            }
            else{
                Alert::error("Wrong password","Please Enter Correct Password");
                return redirect("/Repairer-Login");
            }
        }
        else{
            Alert::error("User not found","User not found please check the detail ");
            return redirect("/Repairer-Login");
        }

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'fullname' => 'required',
            'email'=>'required|unique:repairers',
            'phone' => 'required|min:10',
            'address' => 'required',
            'photo' => 'required',
            'password' => 'required|min:8|max:12',
            'password_confirmation' => 'required|min:8|max:12',
        ]);

        $insert = new repairers;
        if ($request->password === $request->password_confirmation) {
            $insert->name = $request->fullname;
            $insert->email = $request->email;
            $insert->phone = $request->phone;
            $insert->password = Hash::make($request->password);
           // $insert->garage_name=$request->shop_name;
            $insert->address=$request->address;
          
            
            $file = $request->file("photo");
            $filename = time() . '_image.' . $request->file('photo')->getClientOriginalExtension();
            $file->move('garage/owners/', $filename);
            $insert->profile_photo=$filename;

            $insert->save();
            Alert::success("Register Success","You are registred successfully");
            return redirect("/Repairer-Login");
        }
        else{
            Alert::error("Provide correct password","Enter correct password");
            return redirect("/Repairer-Register");
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(repairers $repairers)
    {
        //
        $repairer = repairers::where('email',session()->get('remail'))->first();
        return view('repairer.profile', ["repairer" => $repairer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(repairers $repairers,$id)
    {
        //
        $repairer = repairers::find($id);
        return view('repairer.edit', ['repairer' => $repairer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, repairers $repairers,$id)
    {
        //
        $data = repairers::find($id);
        $data->name=$request->name;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->state=$request->state;
        $data->city=$request->city;
        $data->pincode=$request->pincode;

         if($request->hasFile('profile_photo')) 
        {
            unlink('garage/owners/'.$data->profile_photo);
            $file=$request->file('profile_photo');		
            $filename=time().'_img.'.$request->file('profile_photo')->getClientOriginalExtension();
            $file->move('garage/owners/',$filename);  // use move for move image in public/images
            $data->profile_photo=$filename;
        }
        $data->update();
           Alert::success('Update Success', "User Update Successful");
        return redirect('/Repairer-profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(repairers $repairers)
    {
        //
    }
    public function logout(){
        session()->pull('remail');
        session()->pull('rid');
        Alert::success('Logout','You are successfully logout');
        return redirect('/Repairer-Login');
    }
}
