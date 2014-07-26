<?php
    //para usar o delete genério.
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_GET["cod_proc_orcamento"])){		
        $cod_proc_orcamento = addslashes($_GET["cod_proc_orcamento"]);
        
        $condicao = " WHERE cod_proc_orcamento="."'$cod_proc_orcamento'";
   
    //usando a função delete genérico   
    if(deleta("procedimento_orcamento", $condicao)){
        header('location: ../../../?id=8&idLateral=2');
    }else{
        echo "Erro ao Deletar!";
    }            
    }else{
        header('location: /public/layout/manutencao.php');
    }
?>	
