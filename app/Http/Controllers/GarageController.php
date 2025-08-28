<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\garage;
use App\Models\repairers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $garage = repairers::join('garages', 'garages.repairer_id', '=', 'repairers.id')->select('garages.*')
            ->first();
        return view('repairer.garage', ['garage' => $garage]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('repairer.garage_insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $insert = new garage;
        $insert->repairer_id= session("rid");
        $insert->garage_name = $request->garage_name;
        $insert->garage_address=$request->garage_address;
        $insert->latitude=$request->latitude;
        $insert->longitude=$request->longitude;
        $insert->opentime=$request->opentime;
        $insert->closetime=$request->closetime;
        
            
        // img upload
        $file=$request->file('garage_image');		
        $filename=time().'_img.'.$request->file('garage_image')->getClientOriginalExtension();
        $file->move('garage/',$filename);  // use move for move image in public/images
        $insert->garage_image=$filename;

        $insert->save();
        Alert::success('Garage Added','Your Garage Added Successfully');
        return redirect('garage.index');

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
