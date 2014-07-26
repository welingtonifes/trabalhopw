<?php
              
    //para usar o select genérico.
    include ("bd/crudGenerico.php");
    
    if(isset($_GET["cod_proc_orcamento"])){		
        $cod_agendamento = addslashes($_GET['cod_proc_orcamento']);
        
        //informações para mandar ao select genérico
        $tabela = "procedimeto_orcamento";
        $campos = "*";
        $condicao = "WHERE cod_proc_orcamento="."'$cod_proc_orcamento'";
        
        //retorna dados do select
        $linha = seleciona($campos,$tabela,$condicao);
        if(mnr($linha) ==0){
				echo "Nenhum resultado encontrado";
				
	}
        
        
          $my = mfa($linha);
         
         return $my;
     
    }else{
        echo "erro";
//        header("location:   http://localhost/sgco/?id=5");
   }   
?>
    