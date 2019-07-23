@extends ('templateAdmin')
@section('container')

<h5> MODIFICAR PRODUTO</h5>

<form action="/produto/editar/{{$produto->id}}" method="post">
@csrf
    <input class="rounded border text-black-50" type="text" name="idProduto" value="{{$produto->id}}" hidden>
    <a >Nome</a><br>
    <input class="rounded border text-black-50" type="text" name="nome" value="{{$produto->produto_nome}}"><br>
    <a >Familia</a><br>
    <input class="rounded border text-black-50" type="text" name="familia" value="{{$produto->produto_familia}}"><br>
    <a >Tipo</a><br>
    <input class="rounded border text-black-50" type="text" name="tipo" value="{{$produto->produto_tipo}}"><br>
    <a >Produtor</a><br>
    <input class="rounded border text-black-50" type="text" name="produtor" value="{{$produto->produtor}}"><br>
    <a >Envase</a><br>
    <input class="rounded border text-black-50" type="date" name="envase" value="{{$produto->envase}}"><br>
    <a >Preço de compra</a><br>
    <input class="rounded border text-black-50" type="text" name="compra" value="{{$produto->preco_de_compra}}"><br>
    <a >Preço de venda</a><br>
    <input class="rounded border text-black-50" type="text" name="venda" value="{{$produto->preco_de_venda}}"><br>
    <a >Validade</a><br>
    <input class="rounded border text-black-50" type="date" name="validade" value="{{$produto->validade}}"><br>
    <br>
    <button type="submit">ALTERAR</button>
</form>

@if(isset($resultado))
        @if($resultado)
        <div class="container-fluid  bg-success text-white text-center">
            <a> Produto alterado com sucesso!</a>
        </div>    
        @else
            <h1>Alteração não realizada!</h1>
        @endif
    @endif

@endsection
