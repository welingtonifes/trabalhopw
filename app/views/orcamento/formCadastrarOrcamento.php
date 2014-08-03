<?php
    include ("app/session/validarSession.php");
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>CADASTRO DE ORÇAMENTO</title>         
    </head>
    <body>      
        <form id="container" name="formCadastrarOrcamento" method="POST" action="app/controller/orcamento/procInserirOrcamento.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe os dados do Orçamento: &nbsp;&nbsp;</legend>
                    <br /> 
                    <label>
                        <span>Paciente:</span>
                        &nbsp;&nbsp;<input type="text" name="cod_paciente" value=""/>
                    </label>
                   <label>
                        <span>Data:</span>
                        &nbsp;&nbsp;<input type="text" name="data" id="data" class="jData"  value=""/>
                    </label>
                    
                    <br />   
                </fieldset>  
                <br /> 
                <input  type="submit" name="proximo" value="Proximo" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>



