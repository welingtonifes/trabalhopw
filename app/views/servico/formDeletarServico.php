<?php
    include("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>CADASTRO DE SERVIÇO</title>         
    </head>
    <body>      
        <form id="container" name="formCadastrarServico" method="POST" action="app/controller/servico/procDeletarServico.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe o nome do Serviço que deseja excluir: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <label>
                        <span>Nome:</span>
                        <input type="text" name="nome"/>
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