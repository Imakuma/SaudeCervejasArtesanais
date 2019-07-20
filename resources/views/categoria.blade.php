@extends('layouts.master')

@section('title', 'Categoria')

@section('content')

<section id="categories">


    <div class="container">
        <div class="row my-5 m-0">



            <div class="categories-aside-products col-lg-3 col-md-12 col-0 order-lg-0 order-1">

                <!-- ASIDE - PAGINA DE BUSCA E/OU CATEGORIAS -->
                    @include('layouts.template_parts.sidebar')
                <!-- FIM - ASIDE - PAGINA DE BUSCA E/OU CATEGORIAS -->

            </div>

            <div class="product-list col-lg-9 col-md-12 col-12 order-0 order-lg-1">

                <!-- LISTA BUSCA/CATEGORIAS -->
                    @include('layouts.template_parts.lista-produtos')
                <!-- FIM - LISTA BUSCA/CATEGORIAS -->


            </div>
        </div>
    </div>
</section>

@endsection
