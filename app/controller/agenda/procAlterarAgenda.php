<?php
    //para usar o update genérico. 
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["alterar"])){
        $cod_agendamento      = addslashes($_POST["cod_agendamento"]);
        //$cod_paciente      = addslashes($_POST["nome_paciente"]);
        $cod_dentista        = addslashes($_POST["cod_dentista"]);
        $dt_agendamento       = addslashes($_POST["dt_agendamento"]);
        $cod_horario = addslashes($_POST["cod_horario"]);
             
        
        $campos = "cod_agendamento="      ."'$cod_agendamento'"      .','.
                   
                  "cod_dentista="       ."'$cod_dentista'"       .','. 
                  "dt_agendamento="      ."'$dt_agendamento'"      .','. 
                  "cod_horario="."'$cod_horario'";
        if (!($_POST['cod_paciente']== 0)){
			$cod_paciente =($_POST['cod_paciente']);
			$campos.= ",`cod_paciente`='$cod_paciente'";
		}
        
        //usando a função de update genérico
        if(atualiza("agenda", $campos, "cod_agendamento="."'$cod_agendamento'")){
	    header('location: ../../../?id=8&idLateral=2');
	}else{
            echo "Erro ao Atualizar!";
//            header('location: public/layout/erro.php');
        }        
   }else{
        header('location: public/layout/manutencao.php');
    }  
?>	

