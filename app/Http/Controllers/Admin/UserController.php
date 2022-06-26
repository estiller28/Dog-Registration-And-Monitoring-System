<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Barangay;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::where('id', '!=', 1)->with('barangay')->get();

        return view('admin.manage_users', compact('users'));

    }

    public function create()
    {
        return view('admin.create_users');
    }


    public function store(Request $request)
    {
        $request->validate([
            'barangay' => ['required', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $barangay = Barangay::create([
            'barangay_name' => $request->barangay,
        ]);

        $user = User::create([
            'barangay_id' => $barangay->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('CoAdmin');

        $notification = ([
            'message' => 'User created successfully',
            'alert-type' => 'success',
        ]);

        return redirect()->route('users.index')->with($notification);


    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
