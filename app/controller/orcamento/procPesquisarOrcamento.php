<?php
              
    //para usar o select genérico.
    include ("bd/crudGenerico.php");
    if(isset($_POST["pesquisar"])){		
        $cod_dentista = addslashes($_POST["cod_dentista"]);
        $dt_agendamento = addslashes($_POST["dt_agendamento"]);
        
        //informações para mandar ao select genérico
        $tabela = "agenda a,paciente p,dentista d,horario h";
        $campos ="a.cod_agendamento,p.nome_paciente,d.nome_dentista,a.dt_agendamento,h.horario";
        $condicao = "WHERE a.cod_dentista='$cod_dentista' "
                . "AND a.dt_agendamento = '$dt_agendamento' "
                . "AND a.cod_horario = h.cod_horario "
                . "AND a.cod_paciente = p.cod_paciente "
                . "AND a.cod_dentista = d.cod_dentista";
        
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
    
