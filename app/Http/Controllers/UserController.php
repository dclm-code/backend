<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
     * return user array 
     * @return \App\User object as an array
     */
    public function getUserList(Request $req){
        if($this->currentUser()){
            if($req->criteria !== "" && $req->criteria !== null){
                $user = DB::table('users')
                ->select(DB::raw("id, staff_id, first_name, surname"))
                ->whereRaw("first_name like '%{$req->criteria}%' or surname like '%{$req->criteria}%'")
                ->get();
            return $user;
        } else {
            return response()->json([
                "info" => "You can not search with null value, enter a name."
            ], 403);
        }
        } else {
            return response()->json([
                "info" => "You must be logged in."
            ], 401);
        }        
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
                "info"=>"staff data saved successfully.");
            return response()->json($msg, 200);
        }else{
            $msg = array("status"=>"failed",
                "info"=>"There is an error, staff data not saved.");
            return response()->json($msg, 500);
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
            return response()->json([
                "info" => "You are not allowed."
            ], 403);
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
        if($request->staff_id === $this->currentUser()->staff_id ||
        strtolower($this->currentUser()->role)==="super admin" || 
        strtolower($this->currentUser()->role)==="admin staff"){
            if($user->update($request->all())){
                $msg = array("status"=>"success",
                    "info"=>"staff data updated successfully.");
                return response()->json($msg, 200);
            }else{
                $mg = array("status"=>"failed",
                    "info"=>"staff data not updated.");
                return response()->json($msg, 500);
            }
        } else {
            return response()->json([
                "info" => "Update not allowed"
            ], 403);
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
                return response()->json([
                    "info" => "User deleted successfully."
                ], 204);
            }else{
                $msg = array("status"=>"failed",
                    "info"=>"staff data not deleted.");
                return response()->json($msg, 400);
            }
        }else{
            return response()->json([
                "info" => "Delete not allowed."
            ], 403);
        }       
        
    }
}
