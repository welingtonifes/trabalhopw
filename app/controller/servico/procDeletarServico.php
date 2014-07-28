<?php
    //para usar o delete genério.
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["deletar"])){		
        $nome = addslashes($_POST["nome"]);
        
        $condicao = " WHERE nome="."'$nome'";
   
    //usando a função delete genérico   
    if(deleta("servicos", $condicao)){
        header('location: ../../../?id=8&idLateral=5');
    }else{
        echo "Erro ao Deletar!";
    }            
    }else{
        header('location: /public/layout/manutencao.php');
    }
?>	
