<?php
    //para usar o update genérico. 
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["adicionar"])){
        $cod_proc_orcamento      = addslashes($_POST["cod_proc_orcamento"]);
        $cod_dente        = addslashes($_POST["cod_dente"]);
        $cod_tipo_servico       = addslashes($_POST["cod_tipo_servico"]);
        $valor = addslashes($_POST["valor"]);
             
        
        $campos = "cod_proc_orcamento="      ."'$cod_proc_orcamento'"      .','.
                  "cod_dente ="      ."'$cod_dente '"      .','. 
                  "cod_tipo_servico="       ."'$cod_tipo_servico'"       .','. 
                  "valor="      ."'$valor'"; 
                 
        
        //usando a função de update genérico
        if(atualiza("procedimento_orcamento", $campos, "cod_proc_orcamento="."'$cod_proc_orcamento'")){
	    header('location: ../../../?id=8&idLateral=2');
	}else{
            echo "Erro ao Atualizar!";
//            header('location: public/layout/erro.php');
        }        
   }else{
        header('location: public/layout/manutencao.php');
    }  
?>	

