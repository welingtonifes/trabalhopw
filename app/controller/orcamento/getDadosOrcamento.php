<?php
              
    //para usar o select genérico.
    include ("bd/crudGenerico.php");
    
    if(isset($_GET["cod_orcamento"])){		
        $cod_orcamento = addslashes($_GET['cod_orcamento']);
        
        //informações para mandar ao select genérico
        $tabela = "orcamento o, paciente p,tipo_pagamento tp";
        $campos = "o.cod_orcamento,p.nome_paciente,o.data,o.status,tp.cod_tipo_pagamento,tp.nome_tipo_pagamento,o.valorTotal,o.valorFinal,o.desconto,o.entrada,o.baixa,o.parcelas";
        $condicao = " WHERE o.cod_orcamento="."'$cod_orcamento' "
                . " AND o.cod_tipo_pagamento = tp.cod_tipo_pagamento "
                . " AND o.cod_paciente = p.cod_paciente ";
        
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
    