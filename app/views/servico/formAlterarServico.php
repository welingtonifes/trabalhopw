<?php
    include("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERAR SERVIÇO</title>         
    </head>
    <body>      
        <form id="container" name="formAlterarServico" method="POST" action="?id=22&idLateral=5">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe o nome do Serviço que deseja altear: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <label>
                        <span>Nome do Serviço:</span>
                        <input type="text" name="nome"/>
                    </label>
                    <br /> 
                    <br />    
                </fieldset>  
                <br /> 
                <input  id="teste" type="submit" name="alterar" value="Alterar" class="submit" onsubmit="app/controller/servico/procGetServico.php"/>
                <input   type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>