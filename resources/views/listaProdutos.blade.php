@extends ('templateAdmin')
@section('container')
<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
<section id="lista-produtos">
    <table>
        <caption style="caption-side:top"> Produtos cadastrados</caption>
        <tr style="text-align:center">
            <th style="text-align:left">Produto</th>
            <th>Família</th>
            <th>Tipo</th>
            <th>Produtor</th>
            <th>Envase</th>
            <th>Preço de Compra</th>
            <th>Preço de Venda</th>
            <th>Validade</th>
        </tr>
        <tr style="text-align:center">
            @foreach($listaProdutos as $produto)
            <td style="text-align:left"><a href="/produto/editar/{{$produto->id}}">{{ $produto->produto_nome}} </a></td>
            <td>{{ $produto->produto_familia}}</td>
            <td>{{ $produto->produto_tipo}} </td>
            <td>{{ $produto->produtor}} </td>
            <td>{{ $produto->envase}} </td>
            <td>{{ $produto->preco_de_compra}} </td>
            <td>{{ $produto->preco_de_venda}} </td>
            <td>{{ $produto->validade}} </td>

            <!-- imagem dinamica do banco <img src="storage/img/{{-- $produto->imagem --}}" alt=""> -->
        </tr>
        @endforeach
    </table>
</section>
@endsection
