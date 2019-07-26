<?php

namespace App\Http\Controllers;

use App\GradeLevel;
use Illuminate\Http\Request;

class GradeLevelController extends Controller
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
        return GradeLevel::all();
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
            $gradelevel = GradeLevel::create($req->all());
            $mesg = array("status"=>"success",
            "message"=>"GradeLevel created successfully!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You not allowed to created Grade Level."
            ], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GradeLevel  $gradeLevel
     * @return \Illuminate\Http\Response
     */
    public function show(GradeLevel $gradelevel)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            return $gradelevel;
        }else{
            return response()->json([
                "info" => "You can not view Grade Level."
            ], 401);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GradeLevel  $gradeLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(GradeLevel $gradeLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GradeLevel  $gradeLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, GradeLevel $gradeLevel)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            $gradeLevel->update($req->all());
            $mesg = array("status"=>"success",
            "message"=>"Grade Level, successfully updated!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You are not allowed to update Grade Level."
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GradeLevel  $gradeLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(GradeLevel $gradeLevel)
    {
        if(strtolower($this->currentUser()->role) === "admin staff"){
            $gradeLevel ->delete();
            return response() ->json(null,294);
        }else{
            return response()->json([
                "info" => "You are not allowed to delete Grade Level."
            ], 401);
        }
    }
}
