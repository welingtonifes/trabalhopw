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
        <form id="container" name="formDeletarDente" method="POST" action="app/controller/dente/procDeletarDente.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe o Dente que deseja excluir: &nbsp;&nbsp;</legend>
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
                            <option value= "">Selecione...</option>
                            <option value= "1">Quadrante 1</option>
                            <option value= "2">Quadrante 2</option>
                            <option value ="3">Quadrante 3</option>
                            <option value ="4">Quadrante 4</option>
                            
			</select>
                    
                    <br /> 
                    <br />    
                </fieldset>  
                <br /> 
                <input  type="submit" name="deletar" value="Deletar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>