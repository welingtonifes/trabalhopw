<?php
              
    //para usar o select genérico.
    include ("bd/crudGenerico.php");
    
    if(isset($_GET["cod_agendamento"])){		
        $cod_agendamento = addslashes($_GET['cod_agendamento']);
        
        //informações para mandar ao select genérico
        $tabela = "agenda";
        $campos = "*";
        $condicao = "WHERE cod_agendamento="."'$cod_agendamento'";
        
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
    