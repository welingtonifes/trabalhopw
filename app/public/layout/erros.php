<?php
    if (isset($_GET['erro'])){
        $erro = (int)$_GET['erro'];
        switch ($erro){
            case 1:
                echo "Login e/ou senha inválidos!";
                break;
            case 2:
                echo "Você não tem permissão para acessar esta página!";
                break;
            default:
                echo "Código de erro inválido!";
                break;
        }	
    }				
?>