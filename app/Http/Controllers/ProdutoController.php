<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutoController extends Controller
{

    public //para dizer que é um metodo publico pode ser tbm static ou private
    function //informa que é uma função/metodo
    index() //o nome da função/metodo
    {
        return view('welcome'); 
    }
    
    public function store(Request $request)
    {
        //Criando um produto no banco de dados. 
        Produto::create([
        'nome' => $request->input('nome'),
        'valor' => $request->input('valor'),
        'estoque' => $request->input('estoque')
        ]);
        
    echo "Produto criado com sucesso!"; 
    }

    public function ver($id)

    {
        $produto = Produto::find($id); 
        return view('ver', ['produto' => $produto]); 

    }

    public function edit($id) 
    {
        $produto = Produto::find($id); 

        return view(
            'editar-produto',
            compact('produto') 
        );


    }


    //função para atualizar o produto
    public function update($id, Request $request) 
    {

        $produto = Produto::find($id); 
        $produto->update($request->all()); 

        return ['atualizado com sucesso'];
    }
 

    //função para excluir produto
    public function delete($id, Request $request)
    {
        $produto = Produto::find($id); 
        $produto->delete($request->all());  

        echo ('Produto excluído com sucesso!');
    }
}