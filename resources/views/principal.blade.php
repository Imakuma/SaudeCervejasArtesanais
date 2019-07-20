@extends('layouts.master')

@section('title', 'Home')

@section('content')

<section id="home-carousel">
    <div class="container">
        <div id="corousel-home" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-pause="false">
                    <div class="carousel-bunner img-carousel1">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-bunner img-carousel2" data-pause="false">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-bunner img-carousel3" data-pause="false">
                    </div>
                </div>
            </div>
            <a class="carousel-prev" href="#corousel-home" role="button" data-slide="prev">

                <span class="carousel-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-next" href="#corousel-home" role="button" data-slide="next">
                <span class="carousel-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<section id="home-categories">
    <div class="container">
        <div class="card-group">
            <div class="row justify-content-around w-100 mx-0">
                <div class="card mb-3">
                    <img class="img-fluid" src="assets/img/cat-01.jpg" alt="">
                    <h5 class="card-title">Cervejas Nacionais</h5>
                </div>
                <div class="card mb-3">

                    <img class="img-fluid" src="assets/img/cat-02.jpg" alt="">
                    <h5 class="card-title mx-0 px-0">Cervejas Importadas</h5>
                </div>
                <div class="card mb-3">
                    <img class="img-fluid" src="assets/img/cat-03.jpg" alt="">
                    <h5 class="card-title">Acessórios</h5>
                </div>
                <div class="card mb-3">
                    <img class="img-fluid" src="assets/img/cat-04.jpg" alt="">
                    <h5 class="card-title">Compra Coletiva</h5>
                </div>
            </div>

        </div>
</section>
<!--  Demos -->
<section id="demos">
    <div class="container">

        <h3>Cervejas Nacionais</h3>

        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="card mb-5">
                    <img src="assets/img/produto-01.jpg" class="card-img-top px-4 img-fluid" alt="...">
                    <hr class="m-1">
                    <div class="card-body p-1">
                        <div id="productRating"
                            class="card-rating card-rating-3 d-flex align-content-center mb-2 justify-content-center">
                            <span id="star-1"><i class="fas fa-star"></i></span>
                            <span id="star-2"><i class="fas fa-star"></i></span>
                            <span id="star-3"><i class="fas fa-star"></i></span>
                            <span id="star-4"><i class="fas fa-star"></i></span>
                            <span id="star-5"><i class="fas fa-star"></i></span>
                        </div>
                        <h5 class="card-title text-center">Tupiniquim Ligera Pils Lata 350ml</h5>

                        <div class="de-preco">
                            <span>R$ 15,90</span>
                        </div>
                        <div class="preco">
                            <p>por <span>R$ 13,90</span></p>
                        </div>
                    </div>
                    <button class="btn">Adicionar</button>
                </div>

            </div>
            <div class="item">
                <div class="card mb-5">
                    <img src="assets/img/produto-03.jpg" class="card-img-top px-4 img-fluid" alt="...">
                    <hr class="m-1">
                    <div class="card-body p-1">
                        <div id="productRating"
                            class="card-rating card-rating-3 d-flex align-content-center mb-2 justify-content-center">
                            <span id="star-1"><i class="fas fa-star"></i></span>
                            <span id="star-2"><i class="fas fa-star"></i></span>
                            <span id="star-3"><i class="fas fa-star"></i></span>
                            <span id="star-4"><i class="fas fa-star"></i></span>
                            <span id="star-5"><i class="fas fa-star"></i></span>
                        </div>
                        <h5 class="card-title text-center">Lohn Bier Unfiltered Lager 500ml</h5>

                        <div class="de-preco">
                            <span>R$ 18,90</span>
                        </div>
                        <div class="preco">
                            <p>por <span>R$ 16,90</span></p>
                        </div>
                    </div>
                    <button class="btn">Adicionar</button>
                </div>

            </div>
            <div class="item">
                <div class="card mb-5">
                    <img src="assets/img/produto-04.jpg" class="card-img-top px-4 img-fluid" alt="...">
                    <hr class="m-1">
                    <div class="card-body p-1">
                        <div id="productRating"
                            class="card-rating card-rating-3 d-flex align-content-center mb-2 justify-content-center">
                            <span id="star-1"><i class="fas fa-star"></i></span>
                            <span id="star-2"><i class="fas fa-star"></i></span>
                            <span id="star-3"><i class="fas fa-star"></i></span>
                            <span id="star-4"><i class="fas fa-star"></i></span>
                            <span id="star-5"><i class="fas fa-star"></i></span>
                        </div>
                        <h5 class="card-title text-center">Baltika Classic 3 450ml</h5>

                        <div class="de-preco">
                            <span>R$ 25,90</span>
                        </div>
                        <div class="preco">
                            <p>por <span>R$ 13,90</span></p>
                        </div>
                    </div>
                    <button class="btn">Adicionar</button>
                </div>

            </div>
            <div class="item">
                <div class="card mb-5">
                    <img src="assets/img/produto-05.jpg" class="card-img-top px-4 img-fluid" alt="...">
                    <hr class="m-1">
                    <div class="card-body p-1">
                        <div id="productRating"
                            class="card-rating card-rating-3 d-flex align-content-center mb-2 justify-content-center">
                            <span id="star-1"><i class="fas fa-star"></i></span>
                            <span id="star-2"><i class="fas fa-star"></i></span>
                            <span id="star-3"><i class="fas fa-star"></i></span>
                            <span id="star-4"><i class="fas fa-star"></i></span>
                            <span id="star-5"><i class="fas fa-star"></i></span>
                        </div>
                        <h5 class="card-title text-center">Leuven Pilsen Celebration 600ml</h5>

                        <div class="de-preco">
                            <span>R$ 13,90</span>
                        </div>
                        <div class="preco">
                            <p>por <span>R$ 9,90</span></p>
                        </div>
                    </div>
                    <button class="btn">Adicionar</button>
                </div>

            </div>
            <div class="item">
                <div class="card mb-5">
                    <img src="assets/img/produto-06.jpg" class="card-img-top px-4 img-fluid" alt="...">
                    <hr class="m-1">
                    <div class="card-body p-1">
                        <div id="productRating"
                            class="card-rating card-rating-3 d-flex align-content-center mb-2 justify-content-center">
                            <span id="star-1"><i class="fas fa-star"></i></span>
                            <span id="star-2"><i class="fas fa-star"></i></span>
                            <span id="star-3"><i class="fas fa-star"></i></span>
                            <span id="star-4"><i class="fas fa-star"></i></span>
                            <span id="star-5"><i class="fas fa-star"></i></span>
                        </div>
                        <h5 class="card-title text-center">Jever Pilsener Lata 500ml</h5>

                        <div class="de-preco">
                            <span>R$ 30,90</span>
                        </div>
                        <div class="preco">
                            <p>por <span>R$ 23,90</span></p>
                        </div>
                    </div>
                    <button class="btn">Adicionar</button>
                </div>

            </div>
            <div class="item">
                <div class="card mb-5">
                    <img src="assets/img/produto-07.jpg" class="card-img-top px-4 img-fluid" alt="...">
                    <hr class="m-1">
                    <div class="card-body p-1">
                        <div id="productRating"
                            class="card-rating card-rating-3 d-flex align-content-center mb-2 justify-content-center">
                            <span id="star-1"><i class="fas fa-star"></i></span>
                            <span id="star-2"><i class="fas fa-star"></i></span>
                            <span id="star-3"><i class="fas fa-star"></i></span>
                            <span id="star-4"><i class="fas fa-star"></i></span>
                            <span id="star-5"><i class="fas fa-star"></i></span>
                        </div>
                        <h5 class="card-title text-center">Corona Extra 350ml</h5>

                        <div class="de-preco">
                            <span>R$ 15,90</span>
                        </div>
                        <div class="preco">
                            <p>por <span>R$ 13,90</span></p>
                        </div>
                    </div>
                    <button class="btn">Adicionar</button>
                </div>

            </div>
            <div class="item">
                <div class="card mb-5">
                    <img src="assets/img/produto-08.jpg" class="card-img-top px-4 img-fluid" alt="...">
                    <hr class="m-1">
                    <div class="card-body p-1">
                        <div id="productRating"
                            class="card-rating card-rating-3 d-flex align-content-center mb-2 justify-content-center">
                            <span id="star-1"><i class="fas fa-star"></i></span>
                            <span id="star-2"><i class="fas fa-star"></i></span>
                            <span id="star-3"><i class="fas fa-star"></i></span>
                            <span id="star-4"><i class="fas fa-star"></i></span>
                            <span id="star-5"><i class="fas fa-star"></i></span>
                        </div>
                        <h5 class="card-title text-center">Zlatá Praha 500ml</h5>

                        <div class="de-preco">
                            <span>R$ 25,90</span>
                        </div>
                        <div class="preco">
                            <p>por <span>R$ 18,90</span></p>
                        </div>
                    </div>
                    <button class="btn">Adicionar</button>
                </div>

            </div>
            <div class="item">
                <div class="card mb-5">
                    <img src="assets/img/produto-02.jpg" class="card-img-top px-4 img-fluid" alt="...">
                    <hr class="m-1">
                    <div class="card-body p-1">
                        <div id="productRating"
                            class="card-rating card-rating-3 d-flex align-content-center mb-2 justify-content-center">
                            <span id="star-1"><i class="fas fa-star"></i></span>
                            <span id="star-2"><i class="fas fa-star"></i></span>
                            <span id="star-3"><i class="fas fa-star"></i></span>
                            <span id="star-4"><i class="fas fa-star"></i></span>
                            <span id="star-5"><i class="fas fa-star"></i></span>
                        </div>
                        <h5 class="card-title text-center">Insana Premium Lager 500ml</h5>

                        <div class="de-preco">
                            <span>R$ 16,90</span>
                        </div>
                        <div class="preco">
                            <p>por <span>R$ 8,90</span></p>
                        </div>
                    </div>
                    <button class="btn">Adicionar</button>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
