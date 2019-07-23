@extends ('templateAdmin')
@section('container')


<div class="container">
<h5> CADASTRAR NOVO PRODUTO</h5>

<form action="/produto/cadastro" method="post">
@csrf
    <a>Nome</a><br>
    <input class="rounded border" type="text" name="nome"><br>
    <a>Familia</a><br>
    <input class="rounded border" type="text" name="familia"><br>
    <a>Tipo</a><br>
    <input class="rounded border" type="text" name="tipo"><br>
    <a>Produtor</a><br>
    <input class="rounded border" type="text" name="produtor"><br>
    <a>Envase</a><br>
    <input class="rounded border" type="date" name="envase"><br>
    <a>Preço de compra</a><br>
    <input class="rounded border" type="text" name="compra"><br>
    <a>Preço de venda</a><br>
    <input class="rounded border" type="text" name="venda"><br>
    <a>Validade</a><br>
    <input class="rounded border" type="date" name="validade"><br>
    <br>
    <button type="submit">CADASTRAR</button>
</form>

@if(isset($resultado))
        @if($resultado)
            <div class="container-fluid  bg-success text-white text-center">
                <a> Produto cadastrado com sucesso!</a>
            </div>
            
        @else
            <h1>Erro ao tentar cadastrar!</h1>
        @endif
    @endif

@endsection

</div>
