<html lang="pt-br">
	<head>
            <meta charset="utf-8">
            <title>:: Bem vindo ao sistema! ::</title>	
	</head>
	<body>		
            <p align="center">
                    Bem vindo, <?php ob_start(); echo $_SESSION['nome'];?>&nbsp;&nbsp;&nbsp;&nbsp;[<a href="sair.php">sair</a>]
            </p>		
	</body>	
</html>