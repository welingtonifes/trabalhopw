<?php
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["cadastrar"])){		
        $nome       = addslashes($_POST["nome"]);
        $descricao  = addslashes($_POST["descricao"]);
        $status     = "ativo";       
        
        $dados ="'$nome'"       .','. 
                "'$descricao'"  .','. 
                "'$status'";
        
        $campos = "nome_tipo_pagamento,descricao_tipo_pagamento,status_tipo_pagamento";
        if(insere("tipo_pagamento", $campos, $dados)){           
            header('location: ../../../?id=8&idLateral=8');            
	}else{
            echo "Erro ao Cadastrar!";
        }        
    }else{
        echo "erro";
        //header('location: public/layout/manutencao.php');
    }
?>	
