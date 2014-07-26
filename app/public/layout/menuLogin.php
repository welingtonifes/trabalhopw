<?php
    include("validarSession.php");
?>
<html lang="pt-br">
	<head>
            <meta charset="utf-8">
            <title>:: Bem vindo ao sistema! ::</title>	
	</head>
	<body>		
            <p align="center">
                    Bem vindo, <?php echo $_SESSION['login'];?>&nbsp;&nbsp;&nbsp;&nbsp;[<a href="sair.php">sair</a>]
            </p>		
	</body>	
</html>