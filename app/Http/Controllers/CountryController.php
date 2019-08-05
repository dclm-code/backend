<?php

namespace App\Http\Controllers;


use App\Country;
use Illuminate\Http\Request;
use Auth;

class CountryController extends Controller
{
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
        return Country::all();
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
            if(Country::create($req->all())){
                $mesg = array("status"=>"success",
            "info"=>"Country  successfully updated!");
                return response() ->json($mesg, 200);
            } else {
                $mesg = array("status"=>"failed",
            "info"=>"Country not updated!");
                return response() ->json($mesg, 500);
            }
        }else{
            return response()->json([
                "info" => "You are not allowed to create Country.",
            ], 403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        if(strtolower($this->currentUser()->role )=== "admin staff" ||
        strtolower($this->currentUser()->role) === "super admin"){
            return $country;    
        }else{
            return response()->json([
                "info" => "You cannot view this.",
            ], 403);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Country $country)
    {
        if(strtolower($this->currentUser()->role)=== "admin staff" ||
        strtolower($this->currentUser()->role) === "super admin"){
            $country->update($req->all());
            $mesg = array("status"=>"success",
            "info"=>"country, succesfully updated!");
            return response()->json($mesg, 200);
        } else {
            return response()->json([
                "info" => "You cannot update country.",
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        if(strtolower($this->currentUser()->role) === "super admin"){
            $country->delete();
            return response()->json([
                "info" => "Country deleted.",
            ], 204);
        }else{
            return response()->json([
                "info" => "You are not allowed to delete country.",
            ], 403);
        }
        
    }
}