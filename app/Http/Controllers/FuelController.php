<?php

namespace App\Http\Controllers;

use App\Fuel;
use Illuminate\Http\Request;

class FuelController extends Controller
{
    /**
     * return the current logged in user instance
     * 
     * @return App\User
     */
    protected function currentUser(){
        return Auth::guard('api')->user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Fuel::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req) {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $Fuel = Fuel::create($req->all());
        $mesg = array("staus"=>"success",
        "message"=> "Fuel created successfully!");
        return response()->json($mesg, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function show(Fuel $fuel)
    {
        return $fuel;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function edit(Fuel $fuel)
    {
        return $fuel;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Fuel $fuel)
    {
        $fuel->update($req->all());
        $mesg = array("status"=>"success",
        "message"=>"Fuel, succesfully updated!");
        return response()->json($mesg, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fuel $fuel)
    {
        $fuel->delete();
        return response()->json(null, 204);
    }
}
