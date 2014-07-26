<?php
    
	$bd = "sgco";
	$user = "root";
	$pass = "";
	$host = "127.0.0.1";
	
	$con = mysqli_connect($host,$user,$pass) or die("Erro: " .mysqli_error($con));
	$bd = mysqli_select_db($con,$bd) or die("Erro: " .mysqli_error($con));

// Na linha abaixo é dado um escape, para retirar caracteres que possam prejudicar a consulta sql
$q = mysql_real_escape_string( $_GET['q'] );

// Abaixo a sql que retornará os dados
$sql = "SELECT * FROM pacientewhere locate('$q',nome_paciente) > 0 order by locate('$q',nome_paciente) limit 10";

// Abaixo executo a sql e atribuo o resultado da consulta à variável $res
$res = mysql_query( $sql );

// Para cada resultado encontrado, será gerada uma linha no autocomplete, colocando em negrito o termo digitado.
while( $campo = mysql_fetch_array( $res ) )
{
	$codigo = $campo['cod_paciente'];
	$nome = $campo['nome_paciente'];
	$nome = addslashes($nome);
	//$html = preg_replace("/(" . $q . ")/i", "<span style="font-weight:bold">$1</span>", $estado);

	// Veja que existe o atributo de evento onselect, que executará as funções de retorno no autocomplete
	//echo "<li onselect="this.setText('$estado').setValue('$id','$estado','$sigla');">$html ($sigla)</li>n";
       echo $codigo;
}
?>