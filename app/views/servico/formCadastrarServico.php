<?php
    include ("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>CADASTRO DE SERVIÇO</title>         
    </head>
    <body>      
        <form id="container" name="formCadatrarServico" method="POST" action="app/controller/servico/procInserirServico.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe os dados do Serviço: &nbsp;&nbsp;</legend>
                    <br /> 
                    <label>
                        <span>Nome:</span>
                        <input type="text" size=50 name="nome" />        
                    </label>                     
                    <br />
                    <br />
                    <label>
                        <span>Valor:</span>
                        <input type="text" name="valor"/>
                    </label>                     
                    <br />                    
                </fieldset>  
                <br /> 
                <input  type="submit" name="cadastrar" value="Cadastrar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>