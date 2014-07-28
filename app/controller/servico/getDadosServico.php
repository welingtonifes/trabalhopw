<?php
    //para usar o select genérico.
    include ("bd/crudGenerico.php");
    
    if(isset($_POST["alterar"])){		
        $nome = addslashes($_POST["nome"]);
        
        //informações para mandar ao select genérico
        $tabela = "servicos";
        $campos = "idServico,nome,valor,status";
        $condicao = " WHERE nome="."'$nome'";
        
        //retorna dados do select
        $my = mfa(seleciona($campos,$tabela,$condicao));
        
    }else{
        echo "erro";
//        header("location:   http://localhost/sgco/?id=5");
    }   
?>
