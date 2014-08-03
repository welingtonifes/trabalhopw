<?php
    //para usar o update genérico. 
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["alterar"])){
        $cod_orcamento        = addslashes($_POST["cod_orcamento"]);
        $cod_servico        = addslashes($_POST["cod_servico"]);
        $cod_dente        = addslashes($_POST["cod_dente"]);
        $idServico       = addslashes($_POST["idServico"]);
         $cod_dentista        = addslashes($_POST["cod_dentista"]);
        
             
        
        $campos = "cod_dente ="      ."'$cod_dente '"      .','. 
                  "idServico="       ."'$idServico'"       .','. 
                 "cod_dentista ="      ."'$cod_dentista '";
                   
                 
        
        //usando a função de update genérico
        if(atualiza("servico_executado", $campos, "cod_orcamento="."'$cod_orcamento' AND idServico = $cod_servico")){
	     header('location: ../../../?id=37&cod_orcamento='.$cod_orcamento);
	}else{
            echo "Erro ao Atualizar!";
//            
        }        
   }else{
        header('location: public/layout/manutencao.php');
    }  
?>	

