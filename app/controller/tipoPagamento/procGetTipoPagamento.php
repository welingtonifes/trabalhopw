<?php 
    //chama o arquivo que pega os dados no banco antes de carregar o html abaixo.
    require ("getDadosTipoPagamento.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERANDO tipoPagamento</title>         
    </head>
    <body> 
        <form id="container" name="formGetTipoPagamento" method="POST" action="app/controller/tipoPagamento/procAlterarTipoPagamento.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Dados do tipo de Pagamento para alterar: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <label>
                        <span>Id:</span>
                        <input type="text" size=6 name="id" value="<?php echo $my['cod_tipo_pagamento']; ?>" readonly="readonly"/>     
                    </label>                     
                    <label>
                        <span>Nome:</span>
                        <input type="text" name="nome" value="<?php echo $my['nome_tipo_pagamento']; ?>"/>        
                    </label>                     
                    <br />
                    <br />
                    <label>
                        <span>Descrição:</span>
                        <input type="text" name="descricao" value="<?php echo $my['descricao_tipo_pagamento']; ?>"/>  
                    </label>                    
                    <br />
                    <br />
                    <label>
                        <span>Status:</span>
                        <input type="text" name="status" value="<?php echo $my['status_tipo_pagamento']; ?>"/> 
                    </label>                    
                    <br /> 
                    <br />    
                </fieldset>  
                <br /> 
                <input  type="submit" name="enviar" value="Enviar"  class="submit"/>
                <input  type="reset"  name="limpar" value="Limpar"  class="submit"/>
            </form>  
    </body>
</html>