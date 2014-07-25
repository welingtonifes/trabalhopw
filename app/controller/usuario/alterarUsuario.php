<?php
	include("validarSession.php");
?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>:: Bem vindo ao sistema! ::</title>	
	</head>

	<body>
	<?php
		include("conectar.php");
		$id = $_GET['id'];
		$sql = "SELECT * FROM `usuario` WHERE `cod_usuario`='$id'";
		$sql_exec = mysqli_query($con,$sql) or die("Erro: " .mysqli_error($con));
		$linha = mysqli_fetch_assoc($sql_exec) or die("Erro: " .mysqli_error($con));
	
	?>
		<form name="form1" method="post" action="procAlterarUsuario.php" >
		<p>ID:<input name="id" type="text" value="<?php echo $linha['cod_usuario']; ?>" disabled/></p>
		<input name="cod_usuario" type="hidden" value="<?php echo $linha['cod_usuario']; ?>"/>
		<p>Nome:<input name="nome" type="text" value="<?php echo $linha['nome']; ?>" /></p>
		<p>Login:<input name="login" type="text" value="<?php echo $linha['login']; ?>" /></p>
		<p>Senha:<input name="senha" type="password" value="" /></p>
		<p><input name="enviar" type="submit" value="Alterar" /></p>
		</form>
	</body>	
</html>