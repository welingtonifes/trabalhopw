<?php
    include("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>CADASTRO DE Tipo de Pagamento</title>         
    </head>
    <body>      
        <form id="container" name="formCadastrarCliente" method="POST" action="app/controller/tipoPagamento/procDeletarTipoPagamento.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe o Tipo de Pagamento deseja excluir: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <label>
                        <span>Nome Tipo de Pagamento:</span>
                        <input id="nome" type="text" name="nome"/>
                    </label>
                    <br /> 
                    <br />    
                </fieldset>  
                <br /> 
                <input  type="submit" name="deletar" value="Deletar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>