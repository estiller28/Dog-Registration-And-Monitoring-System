<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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

}
