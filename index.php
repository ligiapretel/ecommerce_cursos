<?php
    $nomeSistema = "Cursos Braseeel";
    $usuario = ["nome"=>"Ligia"];

    $produtos = [
        ["nome"=>"Planejamento estratégico","preco"=>"R$ 2.900,00","duracao"=>"2 meses"],
        ["nome"=>"Matemática Interespacial","preco"=>"R$ 1.900,00","duracao"=>"3 meses"],
    ];

    $categorias = [
        "Cursos","Palestras","Books"
    ];
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
    <header>
        <h1 id="logo">
            <?php echo $nomeSistema; ?>
        </h1>
        <!-- <img src="images/logo.png" alt="Logo"/> -->
        <nav>
            <ul>
                <!-- verificando se a variável usuário existe e se é diferente de vazia -->
                <?php
                    if(isset($usuario) && $usuario != []){
                ?>
                    <a href="#"><li>Cursos</li></a>
                    <a href="#"><li>Olá, <?php echo $usuario["nome"]; ?></li></a>
                <?php }else{ ?>
                    <a href="#"><li>Login</li></a>
                    <a href="#"><li>Cadastro</li></a>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav">
            <!-- Verificando se existe a variável categoria e se ela não está vazia. -->
            <?php if(isset($categorias) && $categorias != []){?>

                <?php 
                    foreach ($categorias as $categoria){?>   
                <a class="nav-link" href="#"><li class="nav-item active"><?php echo $categoria;?></li></a>
                    <?php }?>
            <!-- Fechando php que checa se a variável existe. -->
            <?php } ?>            
            </ul>            
        </nav>
        <section class="container mt-4">
            <div class="row justify-content-around">
            <?php if(isset($produtos) && $produtos != []){?>
                <?php 
                    foreach($produtos as $produto){

                    
                ?>
                    <div class="col-lg-3-card card text-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $produto["nome"]; ?></h5>
                                <img src="images/curso01.svg" class="card-img-top" alt="...">
                                <h5><?php echo $produto["preco"]; ?></h5>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>   
                    </div>
                <!-- Fechando foreach -->
                <?php } ?>
            <!-- Fechando if(isset) -->
            <?php } else { ?>
                <h2>Ops! Não temos cursos disponíveis no momento.</h2>
            <?php } ?>
                
                <!-- Faremos os outros cards usando php, e não mais manualmente como código abaixo     -->
                <!-- <div class="col-lg-3-card card text-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Matemática Interespacial</h5>
                            <img src="images/curso02.svg" class="card-img-top" alt="...">
                            <h5>R$ 59,00</h5>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>   
                </div>
                <div class="col-lg-3-card card text-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Inovação Digital</h5>
                            <img src="images/curso03.svg" class="card-img-top" alt="...">
                            <h5>R$ 79,00</h5>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>   
                </div> -->


            </div>
        </section>
    </main>    

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

        // $numero = 2;
        // switch ($numero) {
        //     case 1:
        //         echo "o número é igual a 1";
        //     break;
        //     case 2:
        //         echo "o número é igual a 2";
        //     break;
        //     default:
        //         echo "o número é diferente de 1 e 2";
        //     break;
        // }

        // //If Ternário
        // $idade = 18;

        // echo $idade == 16?"pré-adolescente":"Não é";

        // //Testando if
        // $idade = 16;

        // if($idade < 16){
        //     echo "Não pode votar";
        // }
        // elseif($idade == 16 || $idade == 17){
        //     echo "Voto opcional";
        // }

    ?>
</body>
</html>