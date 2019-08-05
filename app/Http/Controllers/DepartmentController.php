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
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin"){
            Department::create($req->all());
            $mesg = array("staus"=>"success",
            "info"=> "Department created successfully!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You are not allowed to create department."
            ], 403);
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
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin"){
            return $department;
        }else{
            return response()->json([
                "info" => "You can not view department detail."
            ], 403);
        }
        
    }

    /**
     * returns department given staff_id
     * 
     * @param \App\User\staff_id $staff_id
     * @return \App\Department
     */
    public function getDepartment($staff_id){
        $dept_id = User::where('staff_id', 
            $staff_id)->get()
            ->department_id;

        return Department::where('id', 
            $dept_id)->get()
            ->department_name;
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
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin"){
            if($department->update($req->all())){
                $mesg = array("status"=>"success",
            "info"=>"Department  successfully updated!");
                return response() ->json($mesg, 200);
            } else {
                $mesg = array("status"=>"failed",
            "info"=>"Department not updated!");
                return response() ->json($mesg, 500);
            }
        }else{
            return response()->json([
                "info" => "You are not allowed to update department."
            ], 403);
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
        if(strtolower($this->currentUser()->role) === "admin staff" ||  
        strtolower($this->currentUser()->role) === "super admin"){
            $department->delete();
            return response()->json([
                "info" => "Department deleted successfully."
            ], 204);
        }else{
            return response()->josn([
                "info" => "You are not allowed to delete department."
            ], 403);
        }
        
    }
}
