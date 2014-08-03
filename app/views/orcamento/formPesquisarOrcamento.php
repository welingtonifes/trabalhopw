<?php
    include("app/session/validarSession.php");
    include ("bd/crudGenerico.php");
    include("app/controller/orcamento/funcOrcamento.php");
    $den = listarDentista();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERAR CLIENTE</title>         
    </head>
    <body>      
        <form id="container" name="formAlterarOrcamento" method="POST" action="?id=40&idLateral=2">
                <fieldset>
                    <legend>&nbsp;&nbsp;Pesquisar Orçamentos: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <label>
                        <span>Pesquisar Status:</span>
                        <select name = "status">
                            <option value = "">Selecione..</option>
                            <option value="andamento">Andamento</option>
                            <option value="fechado">Fechado</option>
                        </select>
                    </label> 
                     
                    <br /> 
                    <br />    
                </fieldset>  
                <br /> 
                <input  id="teste" type="submit" name="pesquisar" value="Pesquisar" class="submit"/>
                <input   type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>