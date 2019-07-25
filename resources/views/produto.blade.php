@extends('layouts.master')

@section('title', 'Produto')

@section('content')
<section id="produto">
    <div class="container">

        <div class="row justify-content-around mx-0">
            <div class="produto-img col-lg-6 d-flex justify-content-center">
                <img class="img-fluid" src="assets/img/produto-01.jpg" alt="">
            </div>
            <div class="produto-valor col-lg-4 d-flex justify-content-center">
                <div>
                    <h2 class="text-center">Cerveja Lohn Bier IPA 500ml</h2>
                    <div id="productRating"
                        class="card-rating card-rating-3 d-flex align-content-center mb-2 justify-content-center">
                        <span id="star-1"><i class="fas fa-star"></i></span>
                        <span id="star-2"><i class="fas fa-star"></i></span>
                        <span id="star-3"><i class="fas fa-star"></i></span>
                        <span id="star-4"><i class="fas fa-star"></i></span>
                        <span id="star-5"><i class="fas fa-star"></i></span>
                    </div>
                    <div class="valor row justify-content-around align-items-center">
                        <div class="preco">
                            <p class="valor">R$81,05</p>
                        </div>
                        <div class="qtn">
                            <div id="field1" class="d-flex align-items-center justify-content-between">
                                <button type="button" id="sub" class="sub"><i class="fas fa-minus-circle"></i></button>
                                <input class="form-control" type="number" id="1" value="1" min="1" max="2">
                                <button type="button" id="add" class="add"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="frete">
                        <p>CALCULAR FRETE</p>
                        <p> Calcule o frete e o prazo de entrega estimados para sua região, informe o seu cep
                            abaixo:</p>
                        <form action="" class="row justify-content-center">

                            <input id="frete" class="form-control" type="number" placeholder="Calcular Frete">
                            <button class="btn">OK</button>
                        </form>
                    </div>
                    <div class="comprar justify-content-around">

                        <a href="" class="btn mb-4">Comprar agora</a>
                        <a href="" class="btn">Adicionar ao carrinho</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="descricao col-lg-10 mx-auto mt-4">
            <h3>Descrição do Produto</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores tempora quo. Quod
                minus tempore nobis inventore quidem sint repellat pariatur quisquam magni id. Delectus amet
                nemo aliquid quos eveniet laboriosam. Consectetur quis aut impedit? Velit aspernatur sint
                pariatur cupiditate rerum necessitatibus fuga atque? Ea autem pariatur ut iusto quae, nulla
                nesciunt dolores qui assumenda iste laborum magnam consequatur voluptates aliquam id fugit
                doloremque debitis excepturi placeat, quibusdam suscipit sunt, dolor et nostrum? Officiis quas
                soluta libero dolorem aut ullam fugit tempore eum at! Accusantium vitae sunt debitis enim unde
                cumque, assumenda possimus provident eligendi aut odit illo ea rem eius quia doloribus mollitia
                eveniet. Nemo non dignissimos ducimus quasi officiis, at hic doloribus asperiores eligendi nisi,
                voluptas, nesciunt qui. Quas impedit quod quibusdam consectetur asperiores eveniet culpa dolorem
                repellendus reprehenderit earum illo laboriosam labore a numquam ipsa consequatur architecto
                eos, esse ratione reiciendis minus, eius praesentium quaerat. Debitis iusto laboriosam optio
                tempore minima. Eligendi iure facilis deleniti dolorem itaque nihil maiores amet animi aut,
                tempora voluptas explicabo atque cupiditate quis non, neque ex hic, harum assumenda nobis
                quisquam mollitia corrupti reiciendis illum. Rerum, ea doloribus! Illum, sapiente? Odit modi
                laudantium eaque quidem ipsum atque sit earum nihil maxime laboriosam.</p>

        </div>


    </div>

</section>
<section id="outros-produtos">

    <div class="container">
        <h3>Veja também</h3>
        <div class="row">
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
    </div>
</section>

@endsection
