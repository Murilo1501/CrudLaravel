<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{

    protected $user;

    function __construct(){
        $this->user = new UserModel();
    }

    public function index(){
        $dataUser = $this->user->all();
        return view('user.list',['users'=> $dataUser]);
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
      $this->user->name = $request->name;
      $this->user->email = $request->email;
      $this->user->password = $request->password;
      $this->user->save();

        return redirect('/index');
    }

    public function edit(int $id){

        $data = $this->user->find($id);
        return view('user.edit',['data'=> $data ]);
    }

    public function update(int $id, Request $request){
        $this->user = $this->user->find($id);
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = $request->password;
        $this->user->save();

        return redirect('/index');
    }

    public function destroy(int $id){
         
        $this->user = $this->user->find($id);
        $this->user->delete();

        return redirect('/index');
    }
}
