<?php

$usuario = ["email"=>"email@email.com", "senha"=>'$2y$10$IGASuSFzcMK9.hBNIY7MU.vcIXEeSnA/h0lxScJFNDMrnbgM6J7NO'];

if($_POST){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    // validando email
    if($email == $usuario["email"]){
        // validando a senha - primeiro a senha digitada, que vem do form, e depois o que tenho no banco, criptografado
        if(password_verify($senha,$usuario['senha'])){
            session_start();
            // Criando uma associacao usuario
            $_SESSION["usuario"] = ["nome"=>"Ligia"];
            header("Location:index.php");
        }
    }else{
        echo "E-mail ou senha invalidos =(";
    }
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
    <title>E-commerce Cursos</title>
</head>
<body>
    <?php
        include_once("header.php");
    ?>
    <main class="d-flex justify-content-center align-items-center p-5">
        <form action="login.php" method="POST" class="card p-2">
            <div class="form-group">
                <label for="emailid">Email</label>
                <input class="form-control" type="email" name="email" id="emailid" required/>
            </div>
            <div class="form-group">
                <label for="senhaid">Senha</label>
                <input class="form-control" type="password" name="senha" id="senhaid" required/>
            </div>
            <div class="form-group">
                <button class="btn btn-dark" type="submit"pe>Entrar</button>
            </div>


        </form>
    </main>
</body>
</html>