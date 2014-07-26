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
        <form id="container" name="formCadastrarOrcamento" method="POST" action="app/controller/procedimentoOrcamento/procInserirProcedimentoOrcamento.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe os dados do Procedimento: &nbsp;&nbsp;</legend>
                    <br /> 
                    <label>
                        <span>Dente:</span>
                        <select name = "cod_dente">
                            <option value = "<?php echo $my['cod_dentista']; ?>"><?php echo $my['cod_dentista']; ?></option>
                             <?php while($dentista = $den->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $dentista['cod_dentista'] ?>"><?php echo $dentista["nome_dentista"] ?></option>
			     <?php } ?>
                        </select>
                    </label> 
                   <label>
                        <span>Procedimento:</span>
                        <select name = "cod_tipo_servico">
                            <option value = "<?php echo $my['cod_tipo_servico']; ?>"><?php echo $my['cod_tipo_servico']; ?></option>
                             <?php while($servico = $ser->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $servico['cod_tipo_servico'] ?>"><?php echo $servico["desc_servico"]; $valor = $servico['valor']?></option>
			     <?php } ?>
                        </select>
                    </label> 
                    <br />
                    <br />
                    <label>
                        <span>Valor:</span>
                        &nbsp;&nbsp;<input type="text" name="valor" value="<?php echo $valor ?>"/>
                    </label> 
                    
                    <br />   
                </fieldset>  
                <br /> 
                <input  type="submit" name="adicionar" value="Adicionar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>



