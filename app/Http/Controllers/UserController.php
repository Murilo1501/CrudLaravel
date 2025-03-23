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
}
