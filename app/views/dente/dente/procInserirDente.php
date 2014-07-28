<?php
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["cadastrar"])){		
        $desc_dente       = addslashes($_POST["desc_dente"]);
        $numero        = addslashes($_POST["numero "]);
        $status     = "ativo";
      
        $dados ="'$desc_dente'"       .','. 
                "'$numero'"        .','. 
                "'$status'";
        
        $campos = "desc_dente,numero ,status";
        if(insere("dente", $campos, $dados)){           
            header('location: ../../../?id=8&idLateral=5');
	}else{
            echo "Erro ao Cadastrar!";
        }        
    }else{
        echo "erro";
        //header('location: public/layout/manutencao.php');
    }
?>	
