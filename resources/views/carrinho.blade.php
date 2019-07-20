@extends('layouts.master')

@section('title', 'Carrinho')

@section('content')

<section id="cart">
        <div class="container">
            <div class="row my-5">
                <div class="cart-products col-lg-9">

                    <div class="cart-item-name row justify-content-around col-12">
                        <div class="row col-12 col-md-6 col-lg-6 ">
                        </div>
                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <h6>QTD</h6>
                            </div>
                        </div>
                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <h6>Entrega</h6>
                            </div>
                        </div>
                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <h6>Preço</h6>
                            </div>
                        </div>
                    </div>

                    <!-- CART-ITEM  -->

                    <div class="cart-item row justify-content-around col-12 mb-3">
                        <div class="row col-12 col-md-6 col-lg-6 ">
                            <div
                                class="cart-item-img d-flex align-items-center justify-content-center col-3 py-2 px-0">
                                <img class="img-fluid " src="assets/img/produto-01.jpg" alt="">
                            </div>
                            <div
                                class="cart-item-title d-flex align-items-center justify-content-center px-2 col-9">
                                <p class="m-0">Cerveja Lohn Bier IPA 500ml</p>
                            </div>
                        </div>

                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <div
                                    class="cart-info-content d-flex align-items-center justify-content-center flex-column mt-3">
                                    <div id="field1" class="d-flex align-items-center justify-content-between">
                                        <button type="button" id="sub" class="sub"><i
                                                class="fas fa-minus-circle"></i></button>
                                        <input type="number" id="1" value="1" min="1" max="2">
                                        <button type="button" id="add" class="add"><i
                                                class="fas fa-plus-circle"></i></button>
                                    </div>
                                    <div class="cart-item-remove">
                                        <p class="m-0 small mt-1"><a class="text-secondary" href="#">remover</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <p class="m-0">12/06/2019</p>
                            </div>
                        </div>
                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <p class="m-0">R$ 489,90</p>
                            </div>
                        </div>
                    </div>
                    <!-- FIM CART-ITEM -->

                    <!-- CART-ITEM  -->

                    <div class="cart-item row justify-content-around col-12 mb-3">
                        <div class="row col-12 col-md-6 col-lg-6 ">
                            <div
                                class="cart-item-img d-flex align-items-center justify-content-center col-3 py-2 px-0">
                                <img class="img-fluid " src="assets/img/produto-01.jpg" alt="">
                            </div>
                            <div
                                class="cart-item-title d-flex align-items-center justify-content-center px-2 col-9">
                                <p class="m-0">Cerveja Lohn Bier IPA 500ml</p>
                            </div>
                        </div>

                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <div
                                    class="cart-info-content d-flex align-items-center justify-content-center flex-column mt-3">
                                    <div id="field1" class="d-flex align-items-center justify-content-between">
                                        <button type="button" id="sub" class="sub"><i
                                                class="fas fa-minus-circle"></i></button>
                                        <input type="number" id="1" value="1" min="1" max="2">
                                        <button type="button" id="add" class="add"><i
                                                class="fas fa-plus-circle"></i></button>
                                    </div>
                                    <div class="cart-item-remove">
                                        <p class="m-0 small mt-1"><a class="text-secondary" href="#">remover</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <p class="m-0">12/06/2019</p>
                            </div>
                        </div>
                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <p class="m-0">R$ 489,90</p>
                            </div>
                        </div>
                    </div>
                    <!-- FIM CART-ITEM -->

                    <!-- CART-ITEM  -->

                    <div class="cart-item row justify-content-around col-12 mb-3">
                        <div class="row col-12 col-md-6 col-lg-6 ">
                            <div
                                class="cart-item-img d-flex align-items-center justify-content-center col-3 py-2 px-0">
                                <img class="img-fluid " src="assets/img/produto-01.jpg" alt="">
                            </div>
                            <div
                                class="cart-item-title d-flex align-items-center justify-content-center px-2 col-9">
                                <p class="m-0">Cerveja Lohn Bier IPA 500ml</p>
                            </div>
                        </div>

                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <div
                                    class="cart-info-content d-flex align-items-center justify-content-center flex-column mt-3">
                                    <div id="field1" class="d-flex align-items-center justify-content-between">
                                        <button type="button" id="sub" class="sub"><i
                                                class="fas fa-minus-circle"></i></button>
                                        <input type="number" id="1" value="1" min="1" max="2">
                                        <button type="button" id="add" class="add"><i
                                                class="fas fa-plus-circle"></i></button>
                                    </div>
                                    <div class="cart-item-remove">
                                        <p class="m-0 small mt-1"><a class="text-secondary" href="#">remover</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <p class="m-0">12/06/2019</p>
                            </div>
                        </div>
                        <div class="row col-4 col-md-2 col-lg-2 justify-content-center align-items-center">
                            <div class="cart-item-qtd text-center ">
                                <p class="m-0">R$ 489,90</p>
                            </div>
                        </div>
                    </div>
                    <!-- FIM CART-ITEM -->
                </div>

                <div class="cart-total col-lg-3">
                    <!-- CARRINHO TOTAL -->
                    <div class="cart-total-items">
                        <div class="cart-total-products row justify-content-between mx-0 mb-3">
                            <h6>Total de produtos</h6>
                            <span>2</span>
                        </div>
                        <div class="cart-total-delivery row justify-content-between mx-0 mb-3">
                            <h6>Frete</h6>
                            <span>R$ 20,00</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="cart-total-price row justify-content-between m-0">
                            <h5>Total</h5>
                            <span>R$ 1000,00</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <button class="btn w-100">Contnuar comprando</button>
                        <div class="dropdown-divider"></div>
                        <button class="btn text-uppercase w-100">Finalizar compra</button>
                        <!-- FIM CARRINHO TOTAL -->


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
