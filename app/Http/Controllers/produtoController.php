<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class produtoController extends Controller
{
    public function index (request $request){
        if($request->isMethod ('GET')){
            $listaProdutos = Produto::all();
            return view("listaProdutos",["listaProdutos"=>$listaProdutos]);
        }
    }
    public function create(request $request){
        if($request->isMethod('GET')){
            return view("novoProduto");
        }
        $novoProduto= new Produto();
        $novoProduto->produto_nome=$request->nome;
        $novoProduto->produto_familia=$request->familia;
        $novoProduto->produto_tipo=$request->tipo;
        $novoProduto->produtor=$request->produtor;
        $novoProduto->envase=$request->envase;
        $novoProduto->preco_de_compra=$request->compra;
        $novoProduto->preco_de_venda=$request->venda;
        $novoProduto->validade=$request->validade;
        $resultado=$novoProduto->save();

        return view("novoProduto",["resultado"=>$resultado]);
    }
    public function edit(request $request, $id){
        if($request->isMethod ('GET')){
            $produto = Produto::find($id);
            return view ("editarProduto",["produto"=>$produto]);
        }
        $produto = Produto::find($request->idProduto);
        $produto->produto_nome=$request->nome;
        $produto->produto_familia=$request->familia;
        $produto->produto_tipo=$request->tipo;
        $produto->produtor=$request->produtor;
        $produto->envase=$request->envase;
        $produto->preco_de_compra=$request->compra;
        $produto->preco_de_venda=$request->venda;
        $produto->validade=$request->validade;
        $resultado=$produto->save();

        return view("editarProduto", ["resultado"=>$resultado, "produto"=>$produto]);
    }

}
