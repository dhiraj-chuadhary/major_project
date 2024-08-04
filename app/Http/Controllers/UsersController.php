<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',compact('users'));

    }
    public function create(){
        return view('users.create');

    }
    public function store(Request $request){
        $data= [
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ];
        User::insert($data);
        return redirect()->route('users.index');
    } 
    //user Delete
    public function delete($id){
        if(!$id){
            return redirect()->back();
        }
        $user=User::find($id);
        if($user){
            $user->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }
    //user Edit
    public function edit($id){

        if(!$id){
             return redirect()->back();
        }
   
        $user = User::find($id);
        if($user){
           
             return view('users.edit',compact('user'));
        }
   
        return redirect()->back();
      }
}
