<?php
    //para usar o select genérico.
    include ("bd/crudGenerico.php");
    
    if(isset($_POST["alterar"])){		
        $nome = addslashes($_POST["nome"]);
        
        //informações para mandar ao select genérico
        $tabela = "tipo_pagamento";
        $campos = "cod_tipo_pagamento,nome_tipo_pagamento,descricao_tipo_pagamento,status_tipo_pagamento";
        $condicao = " WHERE nome_tipo_pagamento="."'$nome'";
        
        //retorna dados do select
        $my = mfa(seleciona($campos,$tabela,$condicao));
        
    }else{
        echo "erro";
//        header("location:   http://localhost/sgco/?id=5");
    }   
?>
