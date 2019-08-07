<?php

namespace App\Http\Controllers;

use App\GradeLevel;
use Illuminate\Http\Request;
use Auth;

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
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin"){
            $gradelevel = GradeLevel::create($req->all());
            $mesg = array("status"=>"success",
            "info"=>"GradeLevel created successfully!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You not allowed to created Grade Level."
            ], 403);
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
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin"){
            return $gradelevel;
        }else{
            return response()->json([
                "info" => "You can not view Grade Level."
            ], 403);
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
        if(strtolower($this->currentUser()->role) === "admin staff" ||
        strtolower($this->currentUser()->role) === "super admin"){
            $gradeLevel->update($req->all());
            $mesg = array("status"=>"success",
            "info"=>"Grade Level, successfully updated!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You are not allowed to update Grade Level."
            ], 403);
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
        if(strtolower($this->currentUser()->role) === "super admin"){
            if($gradeLevel->delete()){
                return response() ->json([
                    "status" => "success",
                    "info" => "Grade Level deleted successfully."
                ],200);
            }else{
                return response()->json([
                    "status" => "failed",
                    "info" => "Not deleted."
                ], 200);
            }
        }else{
            return response()->json([
                "info" => "You are not allowed to delete Grade Level."
            ], 403);
        }
    }
}
