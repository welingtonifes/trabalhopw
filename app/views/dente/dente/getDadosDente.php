<?php
    //para usar o select genérico.
    include ("bd/crudGenerico.php");
    
    if(isset($_POST["alterar"])){		
        $nome = addslashes($_POST["numero"]);
        
        //informações para mandar ao select genérico
        $tabela = "dente";
        $campos = "cod_dente,desc_dente,numero,status";
        $condicao = " WHERE numero="."'$numero'";
        
        //retorna dados do select
        $my = mfa(seleciona($campos,$tabela,$condicao));
        
    }else{
        echo "erro";
//        header("location:   http://localhost/sgco/?id=5");
    }   
?>
