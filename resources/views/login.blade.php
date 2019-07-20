@extends('layouts.master')

@section('title', 'Login')

@section('content')
<section id="login">

<div class="col-lg-4 col-12 mx-auto">
    <h2 class="text-center my-4">Olá!</h2>
    <h4 class="text-center mb-5">Para acessar digite seu usuário e senha</h4>

{!! Form::open(['route' => '', 'method' => 'post']) !!}

{!! Form::close() !!}

    {{-- <form class="container">

        <div class="form-group">
            <div class="d-flex justify-content-between">
                <label for="exampleInputEmail1">Email</label>
                <a href="">esqueceu a senha?</a>
            </div>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="ex:josedasilva@gmail.com">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary button">Continuar</button>
        </div>
    </form> --}}
    <div class="container registro d-flex justify-content-end">
        <a href="">Resgistrar-se</a>
    </div>
</div>
</section>

@endsection
