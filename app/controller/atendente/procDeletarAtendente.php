<?php
    //para usar o delete genério.
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["deletar"])){		
        $cpf = addslashes($_POST["cpf"]);
        
        $condicao = " WHERE cpf="."'$cpf'";
   
    //usando a função delete genérico   
    if(deleta("atendentes", $condicao)){
        header('location: ../../../?id=8&idLateral=2');
    }else{
        echo "Erro ao Deletar!";
    }            
    }else{
        header('location: /public/layout/manutencao.php');
    }
?>	
