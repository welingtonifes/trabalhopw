<?php 	
	////// Funcao de conexao com o Banco //////
	function conn(){
		$con = mysqli_connect("localhost","root","");
		mysqli_select_db($con,"sgco");
                mysqli_set_charset($con,"utf8");
		return $con;
	}
        /////// Funcao para fechar conexão com banco ////
        function FechaConexao() {
            $con = conn();
            mysqli_close ($con); // aqui fecho a conexão se baseando na variável acima declarada
        } 
	////// Funcao de Retorno //////
	function mysql_r($retorno){
		$con = conn();		
		$my = mysqli_query($con,$retorno) or die(mysqli_error($con));
		return $my;
	}
	////// Funcao para Selecionar //////
	function seleciona( $campos,$tabela,$condicao){
		$sel = mysql_r("SELECT $campos FROM $tabela $condicao");
		return $sel;
		
	}        
	///// Funcao para Inserir //////
	function insere($tabela, $campos,$array){
                $in = mysql_r("insert into " .$tabela. " values (''," .$array. ")");                
                return $in;		
	}	
        function insere2($tabela, $campos,$array){
                $in = mysql_r("insert into " .$tabela. " values (" .$array. ")");                
                return $in;		
	}
	////// Funcao para Deletar //////
	function deleta($tabela,$condicao){
			$del = mysql_r("DELETE FROM $tabela $condicao");
			return $del;			
	}
	///// Funcao para Atualizar //////
	function atualiza($tabela,$array,$condicao){
		$up = mysql_r("UPDATE $tabela SET $array WHERE $condicao");
		return $up;
		
	}
	
	///// Funcao que recebe array //////
	function mfa($var){
		$vari = mysqli_fetch_array($var);
		return $vari;
	}
	///// Funcao de contagem  //////
	function mnr($var){
		$vari = mysqli_num_rows($var);
		return $vari;
	}	

?>