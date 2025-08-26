<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // Index action
    public function index() {
        $nome = "Irineu";
        $idade = 30;
        $profissao = "Programador";

        $arr = [1.3, 2.3, 3.4, 4, 5];

        $nomes = ["Irineu", "Maria", "Junior", "Hosana", "Natalia"];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes,
        ]);
    }

    public function create() {
        return view('events.create');
    }
}
