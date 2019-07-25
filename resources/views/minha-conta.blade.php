@extends('layouts.master')
@section('title', 'Minha Conta')

@section('content')
<section id="minha-conta">


    <div class="container">
        <div class="row my-5 m-0">
            <div class="minha-conta-aside col-lg-3 col-md-12 col-0 order-lg-0 order-1">
                <!-- ASIDE - Minha-Conta -->
                <ul>
                    <li class="user">
                        <div class="row justify-content-center">
                            <div class="col-2 px-0 d-flex align-items-center justify-content-center"><i
                                    class="far fa-user"></i></div>
                            <div class="col-6 px-0 d-flex align-items-center justify-content-center">
                                <p class="text-center ">Minha conta</p>
                            </div>
                            <!-- <p>Olá Usuário</p> -->
                        </div>

                    </li>
                    <li>
                        <a class="categoria dropdown-toggle" data-toggle="collapse" href="#compras" role="button"
                            aria-controls="compras">
                            <i class="fas fa-shopping-bag"></i> Compras
                        </a>
                        <div class="collapse my-2" id="compras">
                            <ul class="">
                                <li><a href="">Lista de desejos</a></li>
                                <li><a href="">Compras</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="categoria dropdown-toggle" data-toggle="collapse" href="#vendas" role="button"
                            aria-controls="vendas">
                            <i class="fas fa-shopping-cart"></i> Vendas
                        </a>
                        <div class="collapse my-2" id="vendas">
                            <ul class="">
                                <li><a href="">Vender</a></li>
                                <li><a href="">Anúncios</a></li>
                                <li><a href="">Pergundas</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="categoria" href=""><i class="fas fa-cog"></i> Meus Dados</a></li>
                </ul>


            </div>

            <div class="minha-conta-info col-lg-9 col-md-12 col-12 order-0 order-lg-1">
                <h4>Meus dados</h4>
                <div class="col-10 dados">
                    <ul>
                        <li>
                            <div class="nome row mx-0">
                                <div class="col-4">
                                    <p class="titulo">Nome:</p>
                                </div>
                                <div class="col-8">
                                    <p>Vanderlei José Vicente</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="email row mx-0">
                                <div class="col-4">
                                    <p class="titulo">Email:</p>
                                </div>
                                <div class="col-8">
                                    <p>cipans@gmail.com</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cpf row mx-0">
                                <div class="col-4">
                                    <p class="titulo">CPF:</p>
                                </div>
                                <div class="col-8">
                                    <p>333.333.333-00</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="telefone row mx-0">
                                <div class="col-4">
                                    <p class="titulo">Telefone:</p>
                                </div>
                                <div class="col-8">
                                    <p>11 98782-3018</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="telefone row mx-0">
                                <div class="col-4">
                                    <p class="titulo">Tipo de Usuário:</p>
                                </div>
                                <div class="col-8">
                                    <p>Administrador</p>
                                </div>
                            </div>
                        </li>

                    </ul>



                </div>
            </div>
        </div>

        @endsection
