<?php
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["cadastrar"])){		
        $nome       = addslashes($_POST["nome"]);
        $valor       = addslashes($_POST["valor"]);
        $status     = "ativo";
//        $usuario    = filter_var($_POST["usuario"], FILTER_SANITIZE_STRING);
        
        
        $dados ="'$nome'"       .','. 
                "'$valor'"        .','. 
                "'$status'";
        
        $campos = "nome,valor,status";
        if(insere("clientes", $campos, $dados)){           
            header('location: ../../../?id=8&idLateral=2');            
	}else{
            echo "Erro ao Cadastrar!";
        }        
    }else{
        echo "erro";
        //header('location: public/layout/manutencao.php');
    }
?>	
