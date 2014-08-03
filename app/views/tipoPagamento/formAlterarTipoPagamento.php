<?php
    include("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERAR Tipo de Pagamento</title>         
    </head>
    <body>      
        <form id="container" name="formAlterarTipoPagamento" method="POST" action="?id=55&idLateral=8">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe o nome do Tipo de Pagamento que deseja alterar: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <label>
                        <span>Nome do Tipo de Pagamento:</span>
                        <input id="nome" type="text" name="nome"/>
                    </label>
                    <br /> 
                    <br />    
                </fieldset>  
                <br /> 
                <input  id="teste" type="submit" name="alterar" value="Alterar" class="submit" onsubmit="app/controller/tipoPagamento/procGetTipoPagamento.php"/>
                <input   type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>