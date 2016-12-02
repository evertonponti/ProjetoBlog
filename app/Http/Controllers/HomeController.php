<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $posts = [

                ['titulo' => 'Post 1','texto' => 'Teste 1 conteudo', 'autor' => 'José Luiz', 'data' => '02/12/2016 as 10:59'],
                ['titulo' => 'Post 2','texto' => 'Teste 2 conteudo', 'autor' => 'Luiz Augusto', 'data' => '02/12/2016 as 05:00'],
                ['titulo' => 'Post 3','texto' => 'Teste 3 conteudo', 'autor' => 'Pedro Paulo', 'data' => '01/12/2016 as 15:30']
        ];

        return view('home', compact('posts'));
    }
}