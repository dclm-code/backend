<?php

namespace App\Http\Controllers;

use App\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
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
        return Qualification::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            if($qualification->update($req->all())){
                $mesg = array("status"=>"success",
            "message"=>"Qualification  successfully updated!");
                return response() ->json($mesg, 200);
            } else {
                $mesg = array("status"=>"failed",
            "message"=>"Qualification not updated!");
                return response() ->json($mesg, 400);
            }
        }else{
            return response()->json([
                "info" => "You are not allowed to create Qualification."
            ], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function show(Qualification $qualification)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            return $qualification;
        }else{
            return response()->json([
                "info" => "You are not allowed to view Qualification."
            ], 401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function edit(Qualification $qualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Qualification $qualification)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            $qualification->update($req->all());
            $mesg = array("status"=>"success",
            "message"=>"Qualification, successfully updated!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You are not allowed to update Qualification."
            ], 401);
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qualification $qualification)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            $qualification->delete();
            return response()->json(null, 204);
        }else{
            return response()->json([
                "info" => "You are not allowed to delete Qualification"
            ], 401);
        }
    }
}
