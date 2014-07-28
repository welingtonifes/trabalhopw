<?php
    //para usar o select genérico.
    include ("bd/crudGenerico.php");
    
    if(isset($_POST["alterar"])){		
        $numero = addslashes($_POST["numero"]);
        $quadrante = addslashes($_POST["quadrante"]);
        
        //informações para mandar ao select genérico
        $tabela = "dente";
        $campos = "cod_dente,desc_dente,numero,quadrante,status";
        $condicao = " WHERE numero="."'$numero' AND quadrante = $quadrante";
        
        //retorna dados do select
        $my = mfa(seleciona($campos,$tabela,$condicao));
        
    }else{
        echo "erro";
//        header("location:   http://localhost/sgco/?id=5");
    }   
?>
