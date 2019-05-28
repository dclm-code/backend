<?php

namespace App\Http\Controllers;

use App\GroupLga;
use Illuminate\Http\Request;

class GroupLgaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            return GroupLga::all();
        
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
        $grouplga = GroupLga::create($req->all());
        $mesg = array ("status"=>"success",
        "message"=>"GroupLga created successfully!");
        return response()->json($mesg, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GroupLga  $groupLga
     * @return \Illuminate\Http\Response
     */
    public function show(GroupLga $grouplga)
    {
        return $grouplga;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GroupLga  $groupLga
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupLga $groupLga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GroupLga  $groupLga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, GroupLga $grouplga)
    {
        $grouplga->update($req->all());
        $mesg = array ("status"=> "sucess",
        "message"=>"grouplga, successfully updated!");
        return response()->json($mesg, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GroupLga  $groupLga
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupLga $grouplga)
    {
        $grouplga->delete();
        return response()->json(null, 204);
    }
}
