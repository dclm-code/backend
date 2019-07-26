<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use App\User;
use Auth;

class DepartmentController extends Controller
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
        return Department::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req){}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            $department = Department::create($req->all());
            $mesg = array("staus"=>"success",
            "message"=> "Department created successfully!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You are not allowed to create department."
            ], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    { 
        if(strtolower($this->currentUser()->role) === "admin staff"){
            return $department;
        }else{
            return response()->json([
                "info" => "You can not view department detail."
            ], 401);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Department $department)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            if($department->update($req->all())){
                $mesg = array("status"=>"success",
            "message"=>"Department  successfully updated!");
                return response() ->json($mesg, 200);
            } else {
                $mesg = array("status"=>"failed",
            "message"=>"Department not updated!");
                return response() ->json($mesg, 400);
            }
        }else{
            return response()->json([
                "info" => "You are not allowed to update department."
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            $department->delete();
            return response()->json(null, 204);
        }else{
            return response()->josn([
                "info" => "You are not allowed to delete department."
            ], 401);
        }
        
    }
}
