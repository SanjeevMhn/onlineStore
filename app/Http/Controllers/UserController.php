<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function register(){
        return view('Auth.register');
    }
    public function store(Request $request){
    
        $request->validate([
            'user-name' => 'required|string|max:255|min:5',
            'user-email' => 'required|email|unique:users',
            'user-password' => 'required|min:10|alpha_num',
            'user-address' => 'required|alpha_num',
            'user-contact' => 'required|digits:10',
        ]);
        $newPassword = Hash::make($request->input('user-password'));
        $dataArray = array(
            'name' => $request->input('user-name'),
            'email' => $request->input('user-email'),
            'password' => $newPassword,
            'address' => $request->input('user-address'),
            'contact' => $request->input('user-contact'),
        );
        $users = User::create($dataArray);
        if(!isNull($users)){
            return redirect()->route('store.index')->with('status','Registration Successful');
        }
    }
}
