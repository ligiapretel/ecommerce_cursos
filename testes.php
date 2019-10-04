<?php

// var_dump($_GET);

// var_dump($_POST);

// var_dump($_REQUEST);

// echo "Seja bem-vinda ".$_GET["nome"]." ".$_GET["sobrenome"];

// if($_GET["nome"] != "Ligia"){
//     echo "Não é a Ligia.";
// }else{
//     echo "Ohayo, Liiii!";
// }

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testes PHP</title>
</head>
<body>
    <form method="post" action="recebeTestes.php?TESTE_REQUEST">
        <!-- O "name" do input é o campo que aparece na url via get. Sem name, o campo não vai para outro servidor, se perde no limbo. -->
        <input type="text" name="idade" id="" value="13" hidden>
        <input type="text" name="nome" id="">
        <input type="text" name="sobrenome" id="">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>