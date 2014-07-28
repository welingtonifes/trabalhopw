<?php
    var_dump($_POST);
include ("../../../bd/crudGenerico.php");
    if(isset($_POST["cadastrar"])){	
        
        $desc_dente       = addslashes($_POST["desc_dente"]);
        $numero        = addslashes($_POST["numero"]);
        $quadrante        = addslashes($_POST["quadrante"]);
        $status     = "ativo";
      
        $dados ="'$desc_dente'"       .','. 
                "'$numero'"        .','. 
                "'$quadrante'"        .','. 
                "'$status'";
        
        $campos = "desc_dente,numero ,quadrante,status";
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
