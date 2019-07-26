<?php

namespace App\Http\Controllers;

use App\LeaveForm;
use Illuminate\Http\Request;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LeaveForm::all();
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
        $LeaveForm = LeaveForm::create($req->all());
        $mesg = array("staus"=>"success",
        "message"=> "LeaveForm created successfully!");
        return response()->json($mesg, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LeaveForm  $LeaveForm
     * @return \Illuminate\Http\Response
     */
    public function show(   LeaveForm $leaveform)
    {
        return $leaveform;
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
        $leaveform->update($req->all());
        $mesg = array("status"=>"success",
        "message"=>"LeaveForm, succesfully updated!");
        return response()->json($mesg, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LeaveForm  $LeaveForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveForm $LeaveForm)
    {
        $LeaveForm->delete();
        return response()->json(null, 204);
    }
}
