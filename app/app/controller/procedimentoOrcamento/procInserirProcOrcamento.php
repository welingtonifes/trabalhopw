<?php
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["cadastrar"])){		
        $cod_proc_orcamento      = addslashes($_POST["cod_proc_orcamento"]);
        $cod_dente        = addslashes($_POST["cod_dente"]);
        $cod_tipo_servico       = addslashes($_POST["cod_tipo_servico"]);
        $valor = addslashes($_POST["valor"]);
 
        $dados ="'$cod_proc_orcamento'"       .','. 
                "'$cod_dente'"        .','. 
                "'$cod_tipo_servico'"       .','. 
                "'$valor'"; 
        
        $campos = "cod_proc_orcamento, cod_dente,cod_tipo_servico,valor";
        if(insere("procedimento_orcamento", $campos, $dados)){           
            header('location: ../../../?id=8&idLateral=4');            
	}else{
            echo "Erro ao Sdicionar!";
        }        
    }else{
        echo "erro";
        //header('location: public/layout/manutencao.php');
    }
?>	
