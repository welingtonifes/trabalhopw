<?php
              
    //para usar o select genérico.
    //include ("../../../bd/crudGenerico.php");
    
    if(isset($_GET["cod_orcamento"])&&($_GET["idServico"])){		
        $cod_orcamento = addslashes($_GET['cod_orcamento']);
        $idServico = addslashes($_GET['idServico']);
        
        //informações para mandar ao select genérico
        $camp =  "se.cod_orcamento,se.idServico,se.cod_dente,dt.desc_dente,se.cod_dentista,d.nome_dentista,s.nome";
        $condicao= " WHERE se.cod_orcamento = '$cod_orcamento' "
                . " AND se.idServico = '$idServico' "
                . " AND se.cod_dente = dt.cod_dente "
                . " AND se.cod_dentista = d.cod_dentista "
                . " AND se.idServico = s.idServico ";
        $tab = "servico_executado se,"
                . "dente dt,"
                . "dentista d,"
                . "servicos s";
       
        
        //retorna dados do select
        $linha = seleciona($camp,$tab,$condicao);
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
    