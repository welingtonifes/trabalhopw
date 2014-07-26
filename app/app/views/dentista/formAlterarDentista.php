<?php
    include("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERAR Dentista</title>         
    </head>
    <body>      
        <form id="container" name="formAlterarDentista" method="POST" action="?id=12&idLateral=3">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe o cpf do Dentista que deseja altear: &nbsp;&nbsp;</legend>
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
                <input  id="teste" type="submit" name="alterar" value="Alterar" class="submit" onsubmit="app/controller/dentista/procGetDentista.php"/>
                <input   type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>