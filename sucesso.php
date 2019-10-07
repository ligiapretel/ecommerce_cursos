<!-- Inclui variáveis no header, então não preciso mais chamar o arquivo variáveis.php nas páginas em que tiver incluido o header. -->
<?php
    // include_once("config/variaveis.php");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
    <title>E-commerce Cursos</title>
</head>
<body>
<?php

include_once("header.php");
include_once("config/validacoes.php");

//dentro do post eu coloco o name do campo ao qual se refere no form.
$nomeUsuario = $_POST["nomeCompleto"];
$cpfUsuario = $_POST["cpf"];

//chamando a função de validar nome para o campo nomeCompleto, que foi atribuído a variavel nomeUsuario aqui.
validaNome($nomeUsuario);
validaCPF($cpfUsuario);

if(count($erros) == 0){
    echo "<h1>Olá, $nomeUsuario, a sua compra foi realizada com sucesso. Parabéns!</h1>";
}else{
    foreach($erros as $mensagemDeErro){
        echo "<h2>$mensagemDeErro</h2>";
    }
}
   
?>
</body>
</html>