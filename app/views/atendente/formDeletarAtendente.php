<?php
    include("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>EXCLUSÃO DE ATENDENTE</title>         
    </head>
    <body>      
        <form id="container" name="formCadastrarAtendente" method="POST" action="app/controller/atendente/procDeletarAtendente.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe o cpf do Atendente que deseja excluir: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <label>
                        <span>CPF:</span>
                        <input id="campoCpf" type="text" name="cpf"/>
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