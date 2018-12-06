<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;


class UsersController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at','DESC')->paginate(10);
        $data = [
            'users'=>$users,
        ];
        return view('users.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'email'=>'required|email|unique:users',
                'password'=>'required|min:8',
                'password_confirm' => 'required|same:password',
                'name'=>'required',
                'address'=>'required',
                'phone'=>'required',
                'birthdate'=>'required',
                'photo_path'=>'required|image',
            ]
        );
        $path = $request->file('photo_path')->store('images/user');
        User::create([
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'birthdate' => $request->birthdate,
            'permission' => false,
            'photo_path' => $path,
            'active' => true,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        User::find($id)->update(['active'=>true]);
        return redirect()->route('user.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->update(['active'=>false]);
        return redirect()->route('user.index');
    }
}
