<?php
    //para usar o update genérico. 
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["enviar"])){
        $cod_dente          = addslashes($_POST["cod_dente"]);
        $desc_dente        = addslashes($_POST["desc_dente"]);
        $numero        = addslashes($_POST["numero"]);
        $status       = addslashes($_POST["status"]);      
        
        $campos = "desc_dente="      ."'$desc_dente'"      .','. 
                  "numero="     ."'$numero'"     .','. 
                  "status="    ."'$status'"                
                ;
        
        //usando a função de update genérico
        if(atualiza("dente", $campos, "cod_dente="."'$cod_dente'")){
	    header('location: ../../../?id=8&idLateral=5');
	}else{
            echo "Erro ao Atualizar!";
//            header('location: public/layout/erro.php');
        }        
    }else{
        header('location: public/layout/manutencao.php');
    }  
?>	

