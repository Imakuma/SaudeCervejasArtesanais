<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //pagina principal
    public function principal()
    {
        return view('principal');
    }

    //categorias
    public function categoria()
    {
        return view('categoria');
    }

    //produto---
    public function produto()
    {
        return view('produto');
    }

    //carrinho
    public function carrinho()

    {
        return view('carrinho');
    }

    public function login()

    {
        return view('login');
    }
}
