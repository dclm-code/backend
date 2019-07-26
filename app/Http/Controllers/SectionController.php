<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
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
        return Section::all();
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
            if($section->update($req->all())){
                $mesg = array("status"=>"success",
            "message"=>"Section  successfully updated!");
                return response() ->json($mesg, 200);
            } else {
                $mesg = array("status"=>"failed",
            "message"=>"Section not updated!");
                return response() ->json($mesg, 400);
            }
        }else{
            return response()->json([
                "info" => "You are not allowed to create Section."
            ], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            return $section;
        }else{
            return response()->json([
                "info" => "You can not view Section."
            ], 401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Section $section)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            $section->update($req->all());
            $mesg = array("status"=>"success",
            "message"=>"Section, successfully updated!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You are not allowed to update Section."
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            $section->delete();
            return response()->json(null, 204);
        }else{
            return response()->json([
                "info" => "You are not allowed to delete Section."
            ], 401);
        }
    }
}
