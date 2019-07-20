@extends('layouts.master')

@section('title', 'Login')

@section('content')
<section id="login">

    <div class="col-lg-6 col-12 mx-auto">
        <h2 class="text-center my-4">Olá!</h2>
        <h4 class="text-center mb-5">Para acessar digite seu usuário e senha</h4>
    </div>
    <div class="col-lg-4 col-12 mx-auto card">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <div class="d-flex justify-content-between">
                    <label for="email">{{ __('E-Mail') }}</label>
                    @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha?') }}
                    </a>
                    @endif
                </div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Senha') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-check d-flex justify-content-between align-items-center">
                <div class="col-6 px-0">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label text-right" for="remember">
                        {{ __('Lembrar') }}
                    </label>
                </div>
                <div class="col-6 d-flex justify-content-end px-0">
                    <button type="submit" class=" btn button px-4">{{ __('Entrar') }}</button>
                </div>
            </div>
        </form>
        <div class="d-flex justify-content-end mt-4">
            <a href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
        </div>
    </div>
</section>

@endsection
