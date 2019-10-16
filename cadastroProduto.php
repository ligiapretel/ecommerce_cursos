<?php

function cadastrarProduto($nomeProduto,$descricaoProduto,$imgProduto,$precoProduto){

    $nomeArquivo = "produtos.json";
    //isset é para variável, file_exist é para ver se o arquivo existe.
    if(file_exists($nomeArquivo)){
        // Abrindo e pegando informações do arquivo json
        $arquivo = file_get_contents($nomeArquivo);
        // Transformar o json em array (decode) - é preciso colocar como segundo parâmetro true, para informar que quero transformar em um array - se não colocar, ele transforma em objeto.
        $produtos = json_decode($arquivo,true);
        // Adicionando novo produto na estrutura do array associativo.
        $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "img"=>$imgProduto, "descricao"=>$descricaoProduto];
        // Colocando arquivo alterado em formato json
        $json = json_encode($produtos);
        // Salvando os arquivos no produtos.json. Estrutura - primeiro nome do arquivo, depois o encode (variável que faz o encode).
        $deuCerto = file_put_contents($nomeArquivo,$json);

            if($deuCerto){
                return "Deu certo, produto adicionado.";
            }else{
                return "Não deu certo, produto não adicionado.";
            }
        var_dump($produtos);
        
    }else{
        //$produtos - mesmo nome da variável definida em variaveis.php
        // Aqui declaramos a estrutura do array, vazio ainda, para depois adicionar elementos dentro dele (é possível já fazer tudo em uma linha, então ficaria: $produtos = [["nome"=>$nomeProduto, "preco"=>$precoProduto, "img"=>$imgProduto, "descricao"=>$descricaoProduto]];)
        $produtos = [];
        //faz o mesmo que array_push:
        // o nome da etiqueta tem que ser o mesmo que chamo lá na index; o nome da variável é a mesma definida na function
        $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "img"=>$imgProduto, "descricao"=>$descricaoProduto];
        // Tranformando o array associativo em json:
        $json = json_encode($produtos);
        // Salvando os arquivos no produtos.json. Estrutura - primeiro nome do arquivo, depois o encode (variável que faz o encode).
        $deuCerto = file_put_contents($nomeArquivo,$json);

            if($deuCerto){
                return "Deu certo.";
            }else{
                return "Não deu certo.";
            }

    }
}
//verificando se tem algo sendo enviado via post
if($_POST){
    // Salvando arquivo - dentro do files tem que ter o name que vai no input do form, e depois o dado específico que quero pegar dentro desse array (para visualizar esse dado, damos var_dump na $_FILES).
    $nomeImagem = $_FILES["imgProduto"]["name"];
    $localTempImagem = $_FILES["imgProduto"]["tmp_name"];
    //pegando a data atual para concatenar ao nome da imagem
    $dataAtual = date("d-m-y");
    // Onde eu quero que esse arquivo seja salvo:
    $caminhoImagem = "images/".$dataAtual.$nomeImagem;

    $tudoOk = move_uploaded_file($localTempImagem,$caminhoImagem);
    // exit;

    // var_dump($_FILES);
    // exit;

    //colocar parâmetros na mesma ordem que defini na função:
    //o nome que vai dentro do post é o mesmo "name" que está no form.
    // Esse echo imprime o retorno da função.
    echo cadastrarProduto($_POST["nomeProduto"], $_POST["descricaoProduto"], $caminhoImagem, $_POST["precoProduto"]);
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
                <form action="" method="POST" enctype="multipart/form-data">
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