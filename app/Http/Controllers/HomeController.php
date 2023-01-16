<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        return view('index.index');
    }

    public function home(){

        $id = Auth::user()->type_id;

        if($id == 2){
            return view('revisor.revisor');
        }
        else if($id == 3){
            return view('gerenciador.gerenciador');
        }else{
            return view('site.home');
        }
    }

    public function cadastrar(){

        return view('site.cadastrar');
    }

    public function sobre(){

        return view('site.sobre');
    }

    public function conta(){

        return view('site.minha_conta');
    }



}
