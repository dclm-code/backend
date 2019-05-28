<?php

namespace App\Http\Controllers;

use App\GradeLevel;
use Illuminate\Http\Request;

class GradeLevelController extends Controller
{
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
        

            $gradelevel = GradeLevel::create($req->all());
            $mesg = array("status"=>"success",
            "message"=>"GradeLevel created successfully!");
            return response()->json($mesg, 200);
                
            
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GradeLevel  $gradeLevel
     * @return \Illuminate\Http\Response
     */
    public function show(GradeLevel $gradelevel)
    {
        return $gradelevel;
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
        $gradeLevel->update($req->all());
        $mesg = array("status"=>"success",
        "message"=>"gradeLevel,  successfully updated!");
         return response() ->json($mesg, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GradeLevel  $gradeLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(GradeLevel $gradeLevel)
    {
        $gradeLevel ->delete();
        return response() ->json(null,294);
    }
}
