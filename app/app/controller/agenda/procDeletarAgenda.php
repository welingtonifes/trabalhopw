<?php
    //para usar o delete genério.
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_GET["cod_agendamento"])){		
        $cod_agendamento = addslashes($_GET["cod_agendamento"]);
        
        $condicao = " WHERE cod_agendamento="."'$cod_agendamento'";
   
    //usando a função delete genérico   
    if(deleta("agenda", $condicao)){
        header('location: ../../../?id=8&idLateral=2');
    }else{
        echo "Erro ao Deletar!";
    }            
    }else{
        header('location: /public/layout/manutencao.php');
    }
?>	
