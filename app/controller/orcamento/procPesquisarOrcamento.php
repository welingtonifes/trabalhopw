<?php
              
    //para usar o select genérico.
    include ("/bd/crudGenerico.php");
    if(isset($_POST["pesquisar"])){		
        $status = addslashes($_POST["status"]);
        
        
        //informações para mandar ao select genérico
        $tabela = "orcamento o, paciente p";
        $campos ="o.cod_orcamento, p.nome_paciente,o.data,o.valorFinal,o.status";
        $condicao = "WHERE o.status = '$status'"
                . "AND o.cod_paciente = p.cod_paciente";
                
              
               
        
        //retorna dados do select
        $my = seleciona($campos,$tabela,$condicao);
        if(mnr($my) ==0){
            echo "Nenhum resultado encontrado";
				
	}
        else{     
            return $my;
        }    
    }else{
        echo "erro";
//        header("location:   http://localhost/sgco/?id=5");
    }   
?>
    
