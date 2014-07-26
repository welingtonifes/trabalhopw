<?php
    //para usar o select genérico.
    //include ("bd/crudGenerico.php");
    // Função para listar dentistas
    function listarDentista(){
   
        //informações para mandar ao select genérico
        $tabela = "dentista";
        $campos = "cod_dentista,nome_dentista";
        $condicao = "";
        
        //retorna dados do select
        $my = seleciona($campos,$tabela,$condicao);
        
        return $my;
    } 
     // Função para listar horarios
   	function listarHorario(){
   
        //informações para mandar ao select genérico
        $tabela = "horario";
        $campos = "cod_horario,horario";
        $condicao = "";
        
        //retorna dados do select
        $my = seleciona($campos,$tabela,$condicao);
        return $my;
    } 
    
     // Função para listar horarios
   	function listarPaciente(){
   
        //informações para mandar ao select genérico
        $tabela = "paciente";
        $campos = "cod_paciente,nome_paciente";
        $condicao = "WHERE ";
        
        //retorna dados do select
        $my = seleciona($campos,$tabela,$condicao);
        return $my;
    } 
    function pesquisaAgenda($cod_dentista,$dt_agendamento){
		$result = seleciona("a.cod_agendamento,p.nome,d.nome,dt_agendamento,h.horario",
                        "agenda a,"
                        . "paciente p,"
                        . "horario h"
                        ."WHERE `cod_dentista` = '$cod_dentista' "
                        . "AND `dt_agendamento` = '$dt_agendamento'"
                        . "AND a.cod_paciente = p.cod_paciente"
                        . "AND a.cod_horario = h.cod_horario");
			if(mnr($result) ==0){
				echo "Nenhum resultado encontrado";
				
			}
		while ($linha = mfa($result)) {
				return $linha;
		}
	}
   
?>
