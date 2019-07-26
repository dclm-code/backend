<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
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
        //return $this->currentUser()->role;
        if (strtolower($this->currentUser()->role) !== "staff member") {
            return User::all();
        } else {
            return User::where('id', $this->currentUser()->id)->get();
        }
        //return response()->json(User::all(), 200);
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
    public function store(Request $request)
    {
        $user = User::create($request->all());
        if($user){
            $msg = array("status"=>"success",
                "message"=>"staff data saved successfully.");
            return response()->json($msg, 200);
        }else{
            $msg = array("status"=>"failed",
                "message"=>"There is an error, staff data not saved.");
            return response()->json($msg, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //return response()->json($user, 200);
        if (strtolower($this->currentUser()->role) !== 'staff member' ||
        $user->id == $this->currentUser()->id) {
            return $user;
        } else {
            return response()->json(null, 204);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->staff_id === $this->currentUser()->staff_id){
            if($user->update($request->all())){
                $msg = array("status"=>"success",
                    "message"=>"staff data updated successfully.");
                return response()->json($msg, 200);
            }else{
                $mg = array("status"=>"failed",
                    "message"=>"staff data not updated.");
                return response()->json($msg, 400);
            }
        } else {
            return response()->json([
                "status" => "unathorized",
                "info" => "Update not allowed"
            ], 401);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->staff_id === $this->currentUser()->staff_id){
            if($user->delete()){
                return response()->json(null, 204);
            }else{
                $msg = array("status"=>"failed",
                    "message"=>"staff data not deleted.");
                return response()->json($msg, 400);
            }
        }else{
            return response()->json([
                "status" => "failed",
                "info" => "Delete not allowed."
            ], 401);
        }       
        
    }
}
