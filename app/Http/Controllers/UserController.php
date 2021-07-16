<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class userController extends Controller
{
    public function cadastro(){
        return view ('events.cadastro');
    }
    public function store(Request $request){
        $user = new Usuario;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect('/')->with('msg','Usuario criado com sucesso!');

    }
}
