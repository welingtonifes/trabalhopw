<?php 
    //chama o arquivo que pega os dados no banco antes de carregar o html abaixo.
    require ("getDadosDente.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERANDO SERVIÇO</title>         
    </head>
    <body> 
        <form id="container" name="formGetDente" method="POST" action="app/controller/dente/procAlterarDente.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Dados do Dente para alterar: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <label>
                        <span>Codigo:</span>
                        <input type="text" size=6 name="cod_dente" value="<?php echo $my['cod_dente']; ?>" readonly="readonly"/>     
                    </label>  
                    <br /> 
                    <br />                    
                    <label>
                        <span>Descrição:</span>
                        <input type="text" size=50 name="desc_dente" value="<?php echo $my['desc_dente']; ?>"/>        
                    </label>                     
                    <br />
                    <br />
                    <span>Numero:</span>
                        <select name= "numero">	
                            <option value= "<?php echo $my['numero']; ?>"><?php echo $my['numero']; ?></option>
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
                             <option value= "<?php echo $my['quadrante'];?>">Quadrante <?php echo $my['quadrante'];?></option>
                            <option value= "1">Quadrante 1</option>
                            <option value= "2">Quadrante 2</option>
                            <option value ="3">Quadrante 3</option>
                            <option value ="4">Quadrante 4</option>
                            
			</select>
                    <br />
                    <br />
                    <label>  
                        <span>Status:</span>
                        <input size=30 type="text" name="status" value="<?php echo $my['status']; ?>"/> 
                    </label>                     
                </fieldset>  
                <br /> 
                <input  type="submit" name="enviar" value="Enviar"  class="submit"/>
                <input  type="reset"  name="limpar" value="Limpar"  class="submit"/> Limpar nao funciona(consertar depois!)
            </form>  
    </body>
</html>