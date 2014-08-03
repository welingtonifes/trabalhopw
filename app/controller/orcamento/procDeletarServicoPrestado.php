<?php
    //para usar o delete genério.
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_GET["cod_orcamento"])&&($_GET["idServico"])){		
        $cod_orcamento = addslashes($_GET["cod_orcamento"]);
         $idServico = addslashes($_GET["idServico"]);
        
        $condicao = " WHERE cod_orcamento="."'$cod_orcamento' AND idServico="."'$idServico'";
   
    //usando a função delete genérico   
    if(deleta("servico_executado", $condicao)){
        header('location: ../../../?id=38&cod_orcamento='.$cod_orcamento);
    }else{
        echo "Erro ao Deletar!";
    }            
    }else{
        header('location: /public/layout/manutencao.php');
    }
?>	
