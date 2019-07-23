<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>SAUDE</title>
</head>
<body class="bg-white" >
    <header>
        <nav class="navbar navbar-light bg-light mb-5">
            <div class="container-fluid">
                    <div class="col-2">
                        <img src="{{asset('assets/img/logo01.jpeg') }}" height="50" class="d-inline-block align-center" alt="">
                    </div>
                    <div class="col-3"></div>
                    <div class="col-7 text-left">
                        <a class="navbar-brand text-secondary" href="#">Painel Administrativo</a>
                    </div>
            </div>
        </nav>    
    </header>

    <main class="container-fluid ">
        @yield('container')

    </main>
    
    <!-- <footer class="page-footer font-small "> -->
        <nav class="navbar fixed-bottom navbar-dark bg-dark justify-content-center">

            <div class="footer-copyright text-white justify-content-center">
                <p>© 2019 Copyright Saúde!!! </p>
            </div>
        
        </nav>
    <!-- </footer> -->
</body>
</html>