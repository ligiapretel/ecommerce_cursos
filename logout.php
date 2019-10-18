<?php
    session_start();
    // Para o usuário deslogar
    session_destroy();
    // Redirect para o usuário quando deslogar
    header('Location:index.php');
?>