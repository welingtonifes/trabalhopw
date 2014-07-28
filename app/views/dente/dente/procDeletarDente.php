<?php
    //para usar o delete genério.
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["deletar"])){		
        $numero = addslashes($_POST["numero"]);
        
        $condicao = " WHERE numero="."'$numero'";
   
    //usando a função delete genérico   
    if(deleta("dente", $condicao)){
        header('location: ../../../?id=8&idLateral=5');
    }else{
        echo "Erro ao Deletar!";
    }            
    }else{
        header('location: /public/layout/manutencao.php');
    }
?>	
