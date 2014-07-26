<?php
    include("conectar.php");

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];



    mysqli_query($con,"INSERT INTO usuario(nome,login,senha) 
                                                      VALUES('$nome','$login','$senha')")or die("Erro: " .mysqli_error($con));
    echo "Usuario cadastrado com sucesso";

    mysqli_close($con);
    header("location: index.php");
?>

