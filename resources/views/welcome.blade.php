<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1> CADASTRAR PRODUTOS</h1> 
    <br></br> 
    <!-- agora ao inves de você chamar a url assim -> /cadastrar-produto -->
    <form action="./cadastrar-produto" method="POST"> 
          @csrf  
         {{-- Nome --}}
         <label>Nome do Produto:</label>
         <input type="text" name="nome">
         <br><br> 

         {{-- Valor --}}
         <label> Valor do Produto:</label> 
         <input type="text" name="valor">
         <br><br> 

         <label> Quantidade em Estoque:</label> 
         <input type="text" name="estoque">
         {{-- Estoque --}} 
         <br><br> 
         <button>Salvar Produto</button> 
    </form>
</body>
</html>