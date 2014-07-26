<?php
              
    //para usar o select genérico.
    include ("bd/crudGenerico.php");
    
    if(isset($_GET["cod_agendamento"])){		
        $cod_agendamento = addslashes($_GET['cod_agendamento']);
        
        //informações para mandar ao select genérico
       $tabela = "agenda a,paciente p,dentista d,horario h";
        $campos ="a.cod_agendamento,a.cod_paciente,p.nome_paciente,d.cod_dentista,d.nome_dentista,a.dt_agendamento,h.cod_horario,h.horario";
        $condicao = "WHERE a.cod_agendamento='$cod_agendamento' "
                . "AND a.cod_horario = h.cod_horario "
                . "AND a.cod_paciente = p.cod_paciente "
                . "AND a.cod_dentista = d.cod_dentista";
        
        //retorna dados do select
        $linha = seleciona($campos,$tabela,$condicao);
        if(mnr($linha) ==0){
				echo "Nenhum resultado encontrado";
				
	}
        
        
          $my = mfa($linha);
          //echo $my['cod_agendamento'];
         return $my;
     
    }else{
        echo "erro";
//        header("location:   http://localhost/sgco/?id=5");
   }   
?>
    