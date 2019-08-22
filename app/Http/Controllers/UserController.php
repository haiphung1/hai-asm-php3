<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.list-user', compact('users'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
    public function login()
    {
        if(Auth::check()){
            return redirect()->route('user.list-user');
        }
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {
        if(Auth::check()){
            return redirect()->route('user.list-user');
        }
        $data = $request->only(['email', 'password']);
        $checkLogin = Auth::attempt($data);
        if($checkLogin){
            return redirect()->route('user.list-user');
        }else{
            return redirect()->route('admin.login');
        }
    }
    public function register()
    {
        return view('admin.register');
    }
    public function addUser()
    {
        return view('user.add-user');
    }
    public function createUser(Request $request)
    {
        User::create([
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'birthday' => $request->birthday,
            'is_active' => $request->is_active 
        ]);
        return $this->index();
    }
    public function registerUser(Request $request)
    {
        User::create([
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'birthday' => $request->birthday,
            'is_active' => $request->is_active 
        ]);
        return $this->login();
    }
   
}
