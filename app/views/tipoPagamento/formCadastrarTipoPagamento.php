<?php
    include ("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>CADASTRO DE Tipo de Pagamento</title>         
    </head>
    <body> 
        <br />
        <form id="container" name="formCadatrarTipoPagamento" method="POST" action="app/controller/tipoPagamento/procInserirTipoPagamento.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe os dados do Tipo de Pagamento: &nbsp;&nbsp;</legend>
                    <br /> 
                    <label>
                        <span>Nome:</span>
                        <input type="text" size=50 name="nome" />        
                    </label> 
                    <br /> 
                    <br /> 
                    <label>
                        <span>Descrição:</span>
                        <input id="descricao" size=30 type="text" name="descricao"/>
                    </label> 
                    <br />
                    <br />
                </fieldset>  
                <br /> 
                <input  type="submit" name="cadastrar" value="Cadastrar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>