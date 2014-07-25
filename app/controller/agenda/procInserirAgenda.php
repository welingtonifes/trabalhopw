<?php
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["cadastrar"])){		
        $cod_paciente   = addslashes($_POST["cod_paciente"]);
        $cod_dentista   = addslashes($_POST["cod_dentista"]);
        $dt_agendamento = addslashes($_POST["dt_agendamento"]);
        $cod_horario    = addslashes($_POST["cod_horario"]);
 
        $dados ="'$cod_paciente'"   .','. 
                "'$cod_dentista'"   .','. 
                "'$dt_agendamento'" .','. 
                "'$cod_horario'"; 
        
        $campos = "cod_paciente, cod_dentista, dt_agendamento,cod_horario";
        if(insere("agenda", $campos, $dados)){           
            header('location: ../../../?id=8&idLateral=4');            
	}else{
            echo "Erro ao Cadastrar!";
        }        
    }else{
        echo "erro";
        //header('location: public/layout/manutencao.php');
    }
?>	
