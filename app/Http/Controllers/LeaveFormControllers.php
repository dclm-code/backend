<?php

namespace App\Http\Controllers;

use App\LeaveForm;
use Illuminate\Http\Request;
use App\Department;
use Auth;

class LeaveFormControllers extends Controller
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
     * return the current logged in user department
     * 
     * @return App\Department
     */
    protected function getDepartment(){
        return Department::where('id', 
            $this->currentUser()
            ->department_id)->get()
            ->department_name;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin" || 
        strtolower($this->getDepartment())==="administrative"){
            return LeaveForm::all();
        }else{
            return LeaveForm::where('staff_id', 
                $this->currentUser()
                ->staff_id)->get()
        }
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
        if($this->currentUser()){
            $LeaveForm = LeaveForm::create($req->all());
            $mesg = array("staus"=>"success",
            "info"=> "LeaveForm created successfully!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You must be logged in to request a leave."
            ], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LeaveForm  $LeaveForm
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveForm $leaveform)
    {
        if(strtolower($this->currentUser()->role)==="admin staff" || 
        strtolower($this->currentUser()->role)==="super admin" || 
        strtolower($this->getDepartment())==="admininstrative"){
            return $leaveform;
        }else if($leaveform->staff_id === $this->currentUser()->staff_id){
            return $leaveform;
        }else{
            return response()->json([
                "info" => "You are not allowed."
            ], 403);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LeaveForm  $LeaveForm
     * @return \Illuminate\Http\Response
     */
    public function edit(LeaveForm $LeaveForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LeaveForm  $LeaveForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, LeaveForm $leaveform)
    {
        if(strtolower($this->currentUser()->role)==="admin staff" || 
        strtolower($this->currentUser()->role)==="super admin" || 
        strtolower($this->getDepartment())==="admininstrative" || 
        $this->getDepartment() === Department::getDepartment($leaveform->staff_id)){
            $leaveform->update($req->all());
            $mesg = array("status"=>"success",
            "info"=>"LeaveForm, succesfully updated!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You can not update this."
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LeaveForm  $LeaveForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveForm $LeaveForm)
    {
        if(strtolower($this->currentUser()->role)==="super admin" || 
        $this->getDepartment() === Department::getDepartment($leaveform->staff_id)){
            $LeaveForm->delete();
            return response()->json([
                "info" => "Leave request deleted successfully."
            ], 204);
        }else{
            return response()->json([
                "info" => "Sorry, you can not delete leave request."
            ], 403);
        }
    }
}
