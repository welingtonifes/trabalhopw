<?php 
    //chama o arquivo que pega os dados no banco antes de carregar o html abaixo.
    require ("getDadosServico.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERANDO SERVIÇO</title>         
    </head>
    <body> 
        <form id="container" name="formGetServico" method="POST" action="app/controller/servico/procAlterarServico.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Dados do Serviço para alterar: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <label>
                        <span>Id:</span>
                        <input type="text" size=6 name="id" value="<?php echo $my['idServico']; ?>" readonly="readonly"/>     
                    </label>  
                    <br /> 
                    <br />                    
                    <label>
                        <span>Nome:</span>
                        <input type="text" size=50 name="nome" value="<?php echo $my['nome']; ?>"/>        
                    </label>                     
                    <br />
                    <br />
                    <label>
                        <span>Valor:</span>
                        <input  type="text" name="valor" value="<?php echo $my['valor']; ?>" />  
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