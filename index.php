<?php
    $nomeSistema = "Cursos Braseeel";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet"/>
    <title>E-commerce Cursos</title>
</head>
<body>
    <header>
        <h1 id="logo">
            <?php echo $nomeSistema; ?>
        </h1>
        <!-- <img src="images/logo.png" alt="Logo"/> -->
        <nav>
            <ul>
                <a href="#"><li>Cursos</li></a>
                <a href="#"><li>Login</li></a>
                <a href="#"><li>Cadastro</li></a>
            </ul>
        </nav>
    </header>

    <?php
        // $nome = "Ligia";
        // $idade = 10;
        // //array numérico
        // $usuario = ["Ligia","Pretel",10, ["musica","cafe","artes"]];

        // $usuarioDois = ["nome" => "Ligia", "sobrenome" => "Eimantas"];

        // //var_dump($usuario);
        // //para adicionar um valor na última posição disponível do array:
        // $usuario[] = "guitarra";
        // //para adicionar um valor dentro do array, e na última posição disponivel dentro desse array:
        // $usuario[3][] = "violão";

        // echo "<br>";

        // //var_dump($usuario);
        // //imprimindo o array chamando pela posição
        // echo $usuario[1];
        // echo "<br>";
        // //imprimindo um array chamando pela etiqueta
        // echo $usuarioDois["sobrenome"];
        // echo "<br>";
        // //para imprimir um array dentro de um array
        // echo $usuario[3][1];
        
        // echo "<h1>".$usuario[0]." ".$usuario[1]." ".$usuarioDois["sobrenome"]."</h1>";

    ?>
</body>
</html>