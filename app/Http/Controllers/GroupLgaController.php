<?php

namespace App\Http\Controllers;

use App\GroupLga;
use Illuminate\Http\Request;
use Auth;

class GroupLgaController extends Controller
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
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin"){
            $grouplga = GroupLga::create($req->all());
            $mesg = array ("status"=>"success",
            "info"=>"GroupLga created successfully!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You are not allowed to create Group/Local Government."
            ], 403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GroupLga  $groupLga
     * @return \Illuminate\Http\Response
     */
    public function show(GroupLga $grouplga)
    {
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin"){
            return $grouplga;
        }else{
            return response()->json([
                "info" => "You can not view Group/Local Government."
            ], 403);
        }
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
        if(strtolower($this->currentUser()->role) === "admin staff" || 
        strtolower($this->currentUser()->role) === "super admin"){
            if($grouplga->update($req->all())){
                $mesg = array("status"=>"success",
            "info"=>"Group/lga  successfully updated!");
                return response()->json($mesg, 200);
            } else {
                $mesg = array("status"=>"failed",
            "info"=>"Group/lga not updated!");
                return response() ->json($mesg, 500);
            }
        }else{
            return response()->json([
                "info" => "You are not allowed to update Group/Local Government."
            ], 403);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GroupLga  $groupLga
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupLga $grouplga)
    {
       if(strtolower($this->currentUser()->role) === "super admin"){
            $grouplga->delete();
            return response()->json([
                "status" => "success",
                "info" => "Group/Local Government deleted successfully."
            ], 200);
       }else{
           return response()->json([
               "info" => "You are not allowed to delete Group/Local Government."
           ], 403);
       }
    }
}
