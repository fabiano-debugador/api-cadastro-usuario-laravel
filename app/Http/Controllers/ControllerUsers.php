<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;

class ControllerUsers extends Controller
{
    public function index()
    {   
        $users = Users::all();
        return response()->json($users);
    }

    public function create()
    {
        $users = Users::all();
 
        return $users;
    }

    public function store(Request $request)
    {   
        $user = new Users();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $image = $request->file('image');

        if($image) {
            $path = $image->store('image', 'public');
            $user->image = $path;
        } 
        
        $user->save();
        $response = Array("status" => 200, "description" => "User created successfully");
        return response()->json($response);
    }

    public function show($id)
    {
        $user = Users::find($id);
        if(isset($user)) {
            return response()->json($user);
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $user = Users::find($id);
        if(isset($user)) {
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $image = $request->file('image');

            if($image) {
                $path = $image->store('image', 'public');
                $user->image = $path;
            } 

            $user->save();
            $response = Array("status" => 200, "description" => "User updated successfully");
            return response()->json($response);
        }
    }

    public function destroy($id)
    {
        $user = Users::find($id);
        if (isset($user)) {
            $user->delete();
        }
        $response = Array("status" => 200, "description" => "User removed successfully");
        return response()->json($response);
    }
}
