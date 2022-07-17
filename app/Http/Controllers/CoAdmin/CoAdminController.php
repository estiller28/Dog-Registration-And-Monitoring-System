<?php

namespace App\Http\Controllers\CoAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoAdminController extends Controller
{
    public function dashboard(){
        return view('co-admin.co_admin_dashboard');
    }
    public function manageDogs(){
        return view('co-admin.co_admin_manage_dogs');
    }

}
