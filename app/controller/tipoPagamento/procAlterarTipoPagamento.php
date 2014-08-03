<?php
    //para usar o update genérico. 
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["enviar"])){
        $id         = addslashes($_POST["id"]);
        $nome       = addslashes($_POST["nome"]);
        $descricao  = addslashes($_POST["descricao"]);
        $status     = addslashes($_POST["status"]);      
        
        $campos = "nome_tipo_pagamento="      ."'$nome'"      .','.
                  "descricao_tipo_pagamento=" ."'$descricao'" .','. 
                  "status_tipo_pagamento="    ."'$status'" 
                ;
        
        //usando a função de update genérico
        if(atualiza("tipo_pagamento", $campos, "cod_tipo_pagamento="."'$id'")){
	    header('location: ../../../?id=8&idLateral=8');
	}else{
            echo "Erro ao Atualizar!";
//            header('location: public/layout/erro.php');
        }        
    }else{
        header('location: public/layout/manutencao.php');
    }  
?>	

