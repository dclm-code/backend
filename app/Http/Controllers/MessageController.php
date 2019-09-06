<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Auth;

class MessageController extends Controller
    
    
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

        return Message::where('sender', $this->currentUser()->staff_id)
        ->orWhere('receiver', $this->currentUser()->staff_id)->get();
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
        if($this->currentUser()){
            $req->request->add(['sender' => $this->currentUser()->staff_id, 'date_sent' => now(), 'status' => '1']);
            $req->receiver = explode(":", $req->receiver)[0];
            Message::create($req->all());
            $mesg = array("status"=>"success",
            "info"=> "Message sent successfully!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
                "info" => "You must be logged in to send message."
            ], 401);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return $message::where('sender', $this->currentUser()->first_name)
        ->orWhere('receiver', $this->currentUser()->first_name)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Message $message)
    {
        if($this->currentUser()){
            $req->sender = $this->currentUser()->first_name;
            $req->forwardedto = $req->receiver;
            $req->forwarded = 1;
            $message->update($req->all());
            $mesg = array("status"=>"success",
            "info"=>"message, succesfully sent!");
            return response()->json($mesg, 200);
        }else{
            return response()->json([
            "info" => "You must be logged in."],401);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        if(strtolower($this->currentUser()->role)==="super admin"){
            $message->delete();
            return response()->json([
                "info" => "selected message deleted."
            ], 204);
        }else{
            return response()->json([
                "info" => "You allowed to delete messages."
            ], 403);
        }
    }
}
