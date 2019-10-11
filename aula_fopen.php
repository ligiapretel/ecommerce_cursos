<?php

    $nomeArquivo = "dados.txt";

    // $arquivoAberto = fopen($nomeArquivo,"r");
    // var_dump($arquivoAberto);

    // $tamanho = filesize($nomeArquivo);

    // $conteudo = fread($arquivoAberto,$tamanho);

    // // fwrite($arquivoAberto," Será que vai deixar escrever?");

    // fclose($arquivoAberto);

    // $conteudo = file_get_contents($nomeArquivo);

    // echo $conteudo;

    file_put_contents($nomeArquivo," Testando com file append", FILE_APPEND);
?>