<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleCheckerController extends Controller
{
    public function roleCheck()
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('Admin')) {
               return redirect()->route('dashboard');
            }
            if (Auth::user()->hasRole('CoAdmin')) {
                return redirect()->route('coAdminDashboard');
            }
        }
        return view('auth.login');
    }
}
