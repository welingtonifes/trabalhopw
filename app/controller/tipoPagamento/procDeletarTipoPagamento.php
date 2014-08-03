<?php
    //para usar o delete genério.
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["deletar"])){		
        $nome = addslashes($_POST["nome"]);
        
        $condicao = " WHERE nome_tipo_pagamento="."'$nome'";
   
    //usando a função delete genérico   
    if(deleta("tipo_pagamento", $condicao)){
        header('location: ../../../?id=8&idLateral=8');
    }else{
        echo "Erro ao Deletar!";
    }            
    }else{
        header('location: /public/layout/manutencao.php');
    }
?>	
