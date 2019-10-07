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

// function tabuada($numero){
//     for($i = 0; $i <= 10; $i++){
//         echo $numero." x ".$i." = ".($numero*$i)."<br>";
//     }
// }

// tabuada(3);

//Funçaõ sem parâmetro, sempre exibe a mesma mensagem.
// function logado(){
//     echo "Seja bem-vinda.";
// }

// logado();

//Função void
// function filmes($assistidos, $naoAssistidos){
//     $total = $assistidos + $naoAssistidos;
// }

// filmes(4,55);

// function soma($a,$b){
//     return $a + $b;
// }

// echo soma(1,1);

$a = 10;
$b = 15;

function soma(){
    global $a, $b;
    $a = $a + 1;
    return $a + $b;
}
soma();
soma();
echo soma()."<br>";

echo $a;

?>


<!-- <!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testes PHP</title>
</head>
<body>
    <form method="post" action="recebeTestes.php?TESTE_REQUEST"> -->
        <!-- O "name" do input é o campo que aparece na url via get. Sem name, o campo não vai para outro servidor, se perde no limbo. -->
        <!-- <input type="text" name="idade" id="" value="13" hidden>
        <input type="text" name="nome" id="">
        <input type="text" name="sobrenome" id="">

        <button type="submit">Enviar</button>
    </form>
</body>
</html> -->