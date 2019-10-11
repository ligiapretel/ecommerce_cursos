<?php

function cadastrarProduto($nomeProduto,$descricaoProduto,$imgProduto,$precoProduto){

    $nomeArquivo = "produtos.json";
    //isset é para variável, file_exist é para ver se o arquivo existe.
    if(file_exists($nomeArquivo)){

    }else{
        //$produtos - mesmo nome da variável definida em variaveis.php
        $produtos = [];
        //faz o mesmo que array_push:
        // o nome da etiqueta tem que ser o mesmo que chamo lá na index; o nome da variável é a mesma definida na function
        $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "img"=>$imgProduto, "descricao"=>$descricaoProduto];
        var_dump($produtos);
    }
}
//verificando se tem algo sendo enviado via post
if($_POST){
    //colocar parâmetros na mesma ordem que defini na função:
    //o nome que vai dentro do post é o mesmo "name" que está no form.
    cadastrarProduto($_POST["nomeProduto"], $_POST["descricaoProduto"], $_POST["imgProduto"], $_POST["precoProduto"]);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
    <title>Cadastro Produtos</title>
</head>
<body>
    <?php include_once("header.php")?>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Cadastro de Produto</h1>
            </div>
            <div class="col-12">
                <form action="" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="nomeProduto" placeholder="Nome do Produto">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="descricaoProduto" placeholder="Descrição do Produto">
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="imgProduto" placeholder="Imagem do Produto">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="precoProduto" placeholder="Preço do Produto">
                </div>
                <button class="btn btn-success">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>