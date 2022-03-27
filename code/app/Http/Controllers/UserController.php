<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    { 
        User::create([
            "name"  => $request->name,
            "email"  => $request->email,
            "password" => $request->password,
            "phone"=>$request->phone,
            "address"=>$request->address,
            "role_id" => $request->role_id,
        ]);
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $userEdit = User::find($id);
        return view('admin.user.edit', compact('userEdit'));
    }

    public function update(Request $request, $id)
    {
        $userEdit = User::find($id);
        $userEdit->name = $request->name;
        $userEdit->email = $request->email;
        $userEdit->password = $request->password;
        $userEdit->phone = $request->phone;
        $userEdit->address = $request->address;
        $userEdit->role_id = $request->role_id;
        $userEdit->update();
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $userDestroy = User::find($id);
        $userDestroy->destroy($id);
        return redirect()->route('user.index');
    }
}
