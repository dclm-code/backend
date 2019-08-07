<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;
use Auth;

class StateController extends Controller
{
    protected function currentUser()
    {
        return Auth::guard('api')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return State::all();
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
        if(strtolower(strtolower($this->currentUser()->role)) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin"){
            $state = State::create($req->all());
            $mesg = array("status"=>"success",
                            "info"=> "State created successfully!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You are not allowed to create state."
            ], 403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin"){
            return $state;
        }else{
            return response()->json([
                "info" => "You are not allowed."
            ], 403);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, State $state)
    {
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin"){
            $state->update($req->all());
            $mesg = array("status"=>"success",
            "info"=>"state, succesfully updated!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "Not allowed."
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        if(strtolower($this->currentUser()->role) === "super admin"){
            $state->delete();
            return response()->json([
                "status" => "sucess",
                "info" => "State deleted successfully."
            ], 201);
        }else{
            return response()->json([
                "info" => "Not allowed."
            ], 403);
        }
        
    }
}
