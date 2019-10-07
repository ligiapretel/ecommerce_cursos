<?php

// Criando array de erros
$erros = [];

// Criando funções de validação
    function validaNome($nome){
        // A variável $erros foi declarada fora da função, no código, então preciso declarar como escopo global.
        global $erros;
        if(strlen($nome) == 0){
            array_push($erros, "Preencha o campo nome.");
        }
    }

    function validaCPF ($cpf){
        global $erros;
        if(strlen($cpf) != 11){
            array_push($erros, "Preencha o CPF.");
        }
    }

?>