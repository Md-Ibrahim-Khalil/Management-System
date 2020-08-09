<?php

namespace App\Http\Controllers;

use App\UdemyUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = UdemyUser::all();
        return view('welcome', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('add-user');
    }
    public function store(Request $request)
    {
        // $ud = new UdemyUser;
        // $ud->user_name = $request->user_name;
        // $ud->email_address = $request->email_address;
        // $ud->phone_number = $request->phone_number;
        // $ud->save();
        UdemyUser::create($request->all());
        return redirect('/');
    }

    //Create function for Edit user And creating a new edit-user.blade.php  from add-user.blade.php and Change the value="{{$user->user_name}}"
    public function edit($id)
    {
        $user = UdemyUser::find($id);

        return view('edit-user', [
            'user' => $user
        ]);
    }

    //For Update user and this function is post because route method is in post method
    public function update(Request $request, $id)
    {
        $user = UdemyUser::find($id);
        $user->update($request->all());
        return redirect('/');
    }



    //For Delete user
    public function delete($id)
    {
        $user = UdemyUser::find($id);

        $user->delete();
        return back();
    }
}