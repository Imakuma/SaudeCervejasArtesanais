<!doctype html>
<html lang="en">

<head>
    <title>SAÚDE!!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
</head>

<body>
    <header>
        <nav id="nav-desktop" class="fixed-top">
            <div class="container">
                <div id="navbar-top" class="navbar px-1 pb-0 ">
                    <div class="navbar-brand col-lg-2 mx-0 pl-3 pr-0">
                        <a href="#"><img src="assets/img/logo01.jpeg" alt=""></a>
                    </div>
                    <form class="form-inline col-lg-8 mx-auto px-0">
                        <div class="mx-auto">
                            <input class="form-control" size="48" type="search" placeholder="Buscar"
                                aria-label="Search">
                            <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </div>


                    </form>
                    <!-- CARRINHO USUÁRIO LOGADO -->
                    <ul
                        class="navbar-top-user-cart col-lg-2 d-flex justify-content-between align-items-center mb-0 px-0">

                        <!-- STATUS USUÁRIO -->
                        <!-- <li class="navbar-top-user nav-item col-6 px-0">
                        <a class="nav-link d-flex justify-content-center align-items-center" href="#">Logar</a>
                    </li> -->
                        <li class="navbar-top-user nav-item dropdown col-6 px-0">


                            <a class="nav-link dropdown-toggle px-0" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> Cliente</a>
                            <div class="navbar-top-user-contain dropdown-menu">
                                <a class="dropdown-item" href="#">Sua Conta</a>
                                <a class="dropdown-item" href="#">Lista de compras</a>
                                <a class="dropdown-item" href="#">Seus Pedidos</a>
                                <a class="dropdown-item" href="#">Lista de desejos</a>
                                <a class="dropdown-item" href="#"></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Sair</a>
                            </div>
                        </li>

                        <!-- CARRINHO -->
                        <!-- <li class="navbar-top-cart nav-item col-6 px-0">
                        <a class="nav-link d-flex justify-content-center align-items-center" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="ml-2">999</span>
                        </a>
                    </li> -->
                        <li class="navbar-top-cart nav-item col-6 px-0">
                            <a class="nav-link d-flex justify-content-center align-items-center" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <div class="qtd-cart"><span>99</span></div>
                            </a>

                            <!-- CARRINHO -->
                            <div class="navbar-top-cart-contain dropdown-menu p-1">
                                <a class="dropdown-item navbar-top-cart-item m-0 px-1" href="#">
                                    <div class="col-12 p-0 m-0 row">
                                        <div class="col-3 m-0 p-0 d-flex align-items-center justify-content-center">
                                            <img class="img-cart" src="assets/img/cart01.jpg" alt="">
                                        </div>
                                        <div class="col-9 m-0 p-1">
                                            <p class="product-cart m-0 p-1">Cerveja Stella Artois 269ml Caixa (8
                                                Unidades)
                                            </p>
                                            <div class="row p-1 m-0 justify-content-between align-items-center">
                                                <div class="product-cart-price">
                                                    <p class="p-0 m-0">R$ 489,99</p>

                                                </div>
                                                <div class="product-cart-qtd">
                                                    <div id="field1">
                                                        <button type="button" id="sub" class="sub"><i
                                                                class="fas fa-minus-circle"></i></button>
                                                        <input type="number" id="1" value="1" min="1" max="2">
                                                        <button type="button" id="add" class="add"><i
                                                                class="fas fa-plus-circle"></i></button>
                                                    </div>

                                                </div>
                                                <div class="product-cart-delete ml-2">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <!-- FIM CARRINHO -->

                                <div class="product-total px-1 py-0 m-0 row ">
                                    <p class="ml-auto mb-0">TOTAL R$ <span>489,99</span></p>
                                </div>

                                <div class="dropdown-divider"></div>
                                <button class="btn w-100">Finalizar compra</button>
                            </div>
                        </li>
                    </ul>
                    <!-- CARRINHO USUÁRIO LOGADO -->
                </div>
                <!-- MENU -->
                <div id="navbar-links" class="navbar navbar-expand-lg navbar-dark bg-dark p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse menu-desktop" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Todas as Cervejas <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Leilão</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Compra coletiva</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>
        <!-- fim navbarr-desktop -->




        <nav id="nav-mobile" class="navbar navbar-expand-xl fixed-top">

            <!-- MENU -->

            <div class="toggle-btn col-2 m-0 col-lg-2 pl-0 align-items-start">
                <div class="toggle-btn-bars toggle-btn-bar1"></div>
                <div class="toggle-btn-bars toggle-btn-bar2"></div>
                <div class="toggle-btn-bars toggle-btn-bar3"></div>
            </div>

            <div id="sidebar-wrapper">
                <ul class="sidebar-nav mt-5">
                    <li class="nav-user-contain p-1 mb-3">
                        <div class="text-center w-100 mb-2"><span>Bem Vindo</span></div>
                        <div class="row justify-content-around p-0 m-0">
                            <div class="d-flex justify-content-center p-0 m-0 ">

                                <button type="button w-100" class="btn">Fazer Login</button>
                            </div>
                            <div class="d-flex justify-content-center p-0 m-0">

                                <button type="button w-100" class="btn">Cadastrar</button>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true"
                            aria-expanded="false"><i class="fas fa-user mr-2"></i> Cliente</a>
                        <div class=" dropdown-menu w-100">
                            <a class="dropdown-item" href="#">Sua Conta</a>
                            <a class="dropdown-item" href="#">Lista de compras</a>
                            <a class="dropdown-item" href="#">Seus Pedidos</a>
                            <a class="dropdown-item" href="#">Lista de desejos</a>
                            <a class="dropdown-item" href="#"></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Sair</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Todas as Cervejas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Leilão</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Compra Coletiva</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>

                </ul>
            </div>
            <!-- FIM MENU -->
            <!-- LOGO -->
            <div class="navbar-brand d-flex justify-content-center col-3 m-0 p-0 col-md-8 col-lg-8">
                <a class="mx-auto" href="#"><img src="assets/img/logo01.jpeg" alt=""></a>
            </div>
            <!-- FIM LOGO -->
            <!-- BUSCA - CARRINHO -->
            <div class="d-flex justify-content-end col-2 m-0 p-0 col-md-2 col-lg-2">
                <!-- CARRINHO -->
                <a class="nav-link navbar-top-cart d-flex justify-content-end align-items-center" href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <div class="qtd-cart"><span>99</span></div>


                </a>
                <!-- FIM CARRINHO -->
                <!-- BUSCA -->
                <button class="p-0 btn-search-sm" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerSearch" aria-controls="navbarTogglerSearch" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fas fa-search"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarTogglerSearch">
                <form class="form-inline">
                    <div class="d-flex w-100 justify-content-between align-items-center">
                        <input class="form-control w-100" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn my-2 ml-sm-2" type="submit"><i class="fas fa-search"></i></button>
                    </div>

                </form>
            </div>
            <!-- FIM BUSCA -->
            <!-- FIM BUSCA - CARRINHO -->


        </nav>

    </header>