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
                    <legend>&nbsp;&nbsp;Dados do Serviço para alterar: &nbsp;&nbsp;</legend>
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
                    <label>
                        <span>Numero:</span>
                        <input  type="text" name="numero" value="<?php echo $my['numero']; ?>" />  
                    </label>                   
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