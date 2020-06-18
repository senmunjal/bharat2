<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admins.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        print_r('Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Admin $admin)
    {
        request()->validate(
            [
                'name' => 'required | max:30',
                'email' => 'required | email |unique:users,email',
                'password' => 'required | min:8 |max:30',
                'phone_number' => 'required|min:10 |max:10 '
            ]
        );
        $admin = new Admin;
        $admin->name = request('name');
        $admin->email = request('email');
        $admin->password = request('password');
        $admin->phone = request('phone_number');

        $admin->save();

        $editAction = true;
        $admin = Admin::where('flag', '0')->get();
        return view('admins.dashboard', compact('admin', 'editAction'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        print_r('Show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {


        return view('admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        request()->validate(
            [
                'name' => 'required | max:30',
                'email' => 'required | email |unique:users,email',
                'phone_number' => 'required|min:10 |max:12 '
            ]
        );
        $admin->update($request->all());

        $editAction = true;
        $admin = Admin::where('flag', '0')->get();
        return view('admins.dashboard', compact('admin', 'editAction'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
        $admin->delete();
        $editAction = true;
        $admin = Admin::where('flag', '0')->get();
        return view('admins.dashboard', compact('admin', 'editAction'));
    }


    public function login()
    {
        return view('admins.login');
    }

    public function log(Request $request)
    {
        request()->validate(
            [
                'email' => 'required | email |unique:users,email',
                'password' => 'required | min:8 |max:30',
            ]
        );
        $email = request('email');
        $password = request('password');

        $user = Admin::where('email', $email)->where('password', $password)->get();

        if ($user->isEmpty()) {
            print_r("Invalid Username or Password");
        } else {
            $flag = $user[0]->flag;
            $role = $user[0]->role;
            if ($role == 'admin' && $flag == 1) {

                $editAction = true;
                $admin = Admin::where('flag', '0')->get();
                return view('admins.dashboard', compact('admin', 'editAction'));
            } else {
                $editAction = false;
                $admin = Admin::where('flag', '0')->get();
                return view('admins.dashboard', compact('admin', 'editAction'));
            }
        }
    }
}
