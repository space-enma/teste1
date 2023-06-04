<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contat;

class ContatController extends Controller
{
    public function index() {
        
        return view('welcome');
    }

    public function servico(){
        return view('servico');
    }
    public function contats(){
        return view('contats');
    }
    public function equipe(){
        return view('equipe');
    }
    public function sobre(){
        return view('sobre');
    }


    public function form() {
        return view('components.forms.contato');
    }

    public function store(Request $request) {
        $contat = new Contat;

        $contat->name = $request->name;
        $contat->email = $request->email;
        $contat->telefone = $request->telefone;
        $contat->text = $request->text;

        $contat->save();

        return redirect('/');
    }
   
}
