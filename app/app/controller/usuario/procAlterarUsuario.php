<?php
	include("validarSession.php");
        
        include("conectar.php");
        $id = $_POST['cod_usuario'];
        $nome = $_POST['nome'];
        $login = $_POST['login'];

        $sql = "UPDATE `usuario` SET `nome`='$nome',`login`='$login'";

        if (!empty($_POST['senha'])){
                $senha = md5($_POST['senha']);
                $sql .= ",`senha`='$senha'";
        }

        $sql .= " WHERE `cod_usuario`='$id'";

        $sql_exec = mysqli_query($con,$sql) or die("Erro: " .mysqli_error($con));
        header("location: listaUsuarios.php");

?>
