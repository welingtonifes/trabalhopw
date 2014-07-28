<?php
    include ("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>CADASTRO DE DENTE</title>         
    </head>
    <body>      
        <form id="container" name="formCadastrarDente" method="POST" action="app/controller/dente/procInserirDente.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe os dados do Dente: &nbsp;&nbsp;</legend>
                    <br /> 
                    <label>
                        <span>Descrição:</span>
                        <input type="text" size=50 name="desc_dente" />        
                    </label>                     
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
                </fieldset>  
                <br /> 
                <input  type="submit" name="cadastrar" value="Cadastrar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>