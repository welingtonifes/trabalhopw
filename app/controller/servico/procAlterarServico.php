<?php
    //para usar o update genérico. 
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["enviar"])){
        $id           = addslashes($_POST["id"]);
        $nome         = addslashes($_POST["nome"]);
        $valor        = addslashes($_POST["valor"]);
        $status       = addslashes($_POST["status"]);      
        
        $campos = "nome="      ."'$nome'"      .','. 
                  "valor="     ."'$valor'"     .','. 
                  "status="    ."'$status'"                
                ;
        
        //usando a função de update genérico
        if(atualiza("servicos", $campos, "idServico="."'$id'")){
	    header('location: ../../../?id=8&idLateral=5');
	}else{
            echo "Erro ao Atualizar!";
//            header('location: public/layout/erro.php');
        }        
    }else{
        header('location: public/layout/manutencao.php');
    }  
?>	

