<?php

namespace App\Http\Controllers;

use App\Fuel;
use Illuminate\Http\Request;
use App\Department;
use Auth;

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
     * return the department of the current logged in user
     * 
     * @return App\Department
     */
    protected function getDepartment(){
        return Department::where('id', 
            $this->currentUser()
            ->department_id)->get();
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
        Fuel::create($req->all());
        $mesg = array("staus"=>"success",
            "info"=> "Fuel created successfully!");
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
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin" || 
        strtolower($this->getDepartment()) === "administrative"){
            return $fuel;
        }else{
            return response()->json([
                "info" => "You can not view Fuel detail."
            ], 403);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function edit(Fuel $fuel)
    {
        //return $fuel;
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
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin" || 
        strtolower($this->getDepartment()) === "administrative"){
            $fuel->update($req->all());
            $mesg = array("status"=>"success",
            "info"=>"Fuel, succesfully updated!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You cannot update fuel request."
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fuel $fuel)
    {
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin" || 
        strtolower($this->getDepartment()) === "administrative"){
            $fuel->delete();
            return response()->json([
                "info" => "Fuel request deleted successfully."
            ], 204);
        }else{
            return response()->json([
                "info" => "You are not allowed to delete Fuel request."
            ], 403);
        }
    }
}
