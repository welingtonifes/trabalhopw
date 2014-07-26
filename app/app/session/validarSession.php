<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    //é mais segura pegar usar o nome do usuário do que o login, pois pra entrar no sistema
    //necessário senha e login
    if (!isset($_SESSION['nome'])){
        header("location: ?id=7");
    }
?>