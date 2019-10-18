<?php
    session_start();

    $nomeSistema = "Cursos Braseeel";
    // verificar se o usuario logou
    $usuario = isset($_SESSION["usuario"])? $_SESSION["usuario"]:[];
    // $usuario = ["nome"=>"Ligia"];

    // $produtos = [
    //     ["nome"=>"Planejamento estratégico","preco"=>"R$ 2.900,00","duracao"=>"2 meses","img"=>"images/curso01.svg"],
    //     ["nome"=>"Matemática Interespacial","preco"=>"R$ 1.900,00","duracao"=>"3 meses","img"=>"images/curso02.svg"],
    // ];

    // No DIR, colocar uma barra antes de subir um nível - regra PHP
    $nomeArquivo = __DIR__."/../produtos.json";
    // Abrindo e já transformando o arquivo json em array associativo
    $produtos = json_decode(file_get_contents($nomeArquivo),true);

    // echo $nomeArquivo;


    
    $categorias = [
        "Cursos","Palestras","Books"
    ];
?>