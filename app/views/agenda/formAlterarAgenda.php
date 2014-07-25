<?php ob_start();
    include("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERAR CLIENTE</title>         
    </head>
    <body>      
        <form id="container" name="formAlterarCliente" method="POST" action="?id=5&idLateral=2">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe o cpf do Paciente que deseja altear: &nbsp;&nbsp;</legend>
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
                <input  id="teste" type="submit" name="alterar" value="Alterar" class="submit" onsubmit="app/controller/cliente/procGetCliente.php"/>
                <input   type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>