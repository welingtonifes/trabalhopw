<?php
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["cadastrar"])){		
        $nome       = addslashes($_POST["nome"]);
        $valor        = addslashes($_POST["valor"]);
        $status     = "ativo";
      
        $dados ="'$nome'"       .','. 
                "'$valor'"        .','. 
                "'$status'";
        
        $campos = "nome,valor,status";
        if(insere("servicos", $campos, $dados)){           
            header('location: ../../../?id=8&idLateral=5');
	}else{
            echo "Erro ao Cadastrar!";
        }        
    }else{
        echo "erro";
        //header('location: public/layout/manutencao.php');
    }
?>	
