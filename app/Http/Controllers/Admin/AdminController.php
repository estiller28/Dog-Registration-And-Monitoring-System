<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Dogs;
use App\Models\User;

class AdminController extends Controller{

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function manageDogs(){
        return view('admin.manage_dogs');
    }
    public function dogsCreate(){

        return view('admin.create_dogs');
    }
    public function manageUsers(){
        return view('admin.manage_users');
    }
    public function createUsers()
    {
        return view('admin.create_users');
    }

    public function show(Dogs $dog){
        return view('admin.dog_edit', compact('dog'));
    }
    public function editUser(User $user){
        return view('admin.user_edit', compact('user'));
    }
    public function userProfile(){
        return view('admin.user_profile');
    }

}
