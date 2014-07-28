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
        <form id="container" name="formAlterarDente" method="POST" action="?id=32&idLateral=7">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe o numero do Dente que deseja altear: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <span>Numero:</span>
                        <select name= "numero">	
                            <option value= "">Selecione...</option>
                            <option value= "1">1</option>
                            <option value= "2">2</option>
                            <option value ="3">3</option>
                            <option value ="4">4</option>
                            <option value ="5">5</option>
                            <option value ="6">6</option>
                            <option value ="7">7</option>
                            <option value ="8">8</option>
			</select>
                        <span>Quadrante:</span>
                        <select name= "quadrante">							
                            <option value= "1">Quadrante 1</option>
                            <option value= "2">Quadrante 2</option>
                            <option value ="3">Quadrante 3</option>
                            <option value ="4">Quadrante 4</option>
                            
			</select>
                    <br /> 
                    <br />    
                </fieldset>  
                <br /> 
                <input  id="teste" type="submit" name="alterar" value="Alterar" class="submit" onsubmit="app/controller/dente/procGetdente.php"/>
                <input   type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>