<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function usersAll(){
    
    //     $users = User::latest()->get();
    //     return view('backend.user.index', compact('users'));
    // }


    public function userCreate()
    {
        $users = User::latest()->get();
        return view('backend.user.index', compact('users'));
    }

    public function userStore(Request $request)
    {
        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile'   => ['nullable', 'unique:users'],
            'username' => ['nullable', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    
        $user = new User();
        $user->name      = $request->name;
        $user->mobile    = $request->mobile;
        $user->username  = $request->username;
        $user->email     = $request->email;
        $user->password  = Hash::make($request->password);
        $user->save();
        
        toast('User Created Successfully!','success');
        return redirect()->back();

    }

   
    public function userEdit(User $user)
    {
        return view('backend.user.edit', compact('user'));
    }

    public function userUpdate(Request $request, User $user)
    {
        $validated = $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email,' . $user->id,
            'username' => 'nullable|unique:users,email,' . $user->id,
            'mobile'   => 'nullable|unique:users,email,' . $user->id,
        ]);

        $user->name     = $request->name;
        $user->mobile   = $request->mobile;
        $user->username = $request->username;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        toast('User Updated Successfully!','success');
        return redirect()->route('admin.usersAll');
    }

    public function userDelete(User $user)
    {
        $user->delete();

        toast('User Deleted Successfully!','success');
        return redirect()->route('admin.usersAll');
    }
}
