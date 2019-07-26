<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
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
        return Region::all();
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
            if($region->update($req->all())){
                $mesg = array("status"=>"success",
            "message"=>"Region  successfully updated!");
                return response() ->json($mesg, 200);
            } else {
                $mesg = array("status"=>"failed",
            "message"=>"Region not updated!");
                return response() ->json($mesg, 400);
            }
        }else{
            return response()->json([
                "info" => "You are not alowed to create Region."
            ], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            return $region;
        }else{
            return response()->json([
                "info" => "You are not allowed to view Region."
            ], 401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Region $region)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            $region->update($req->all());
            $mesg = array ("status"=> "sucess",
            "message"=>"region, successfully updated!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You are not allowed to update Region."
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
       if(strtolower($this->currentUser()->role) === "admin staff"){
            $region->delete();
            return response()->json(null, 204);
       }else{
           return response()->json([
               "info" => "You are not allowed to delete Region."
           ], 401);
       }
    }
}
