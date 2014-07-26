<?php
    include ("app/session/validarSession.php");
    somaValor($cod_orcamento);
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
                    <legend>&nbsp;&nbsp;Informe os dados do Orçamento: &nbsp;&nbsp;</legend>
                    <br /> 
                    <label>
                        <span>Paciente:</span>
                        &nbsp;&nbsp;<input type="text" name="nome_paciente" value=""/>
                    </label>
                    <label>
                        <span>Dentista:</span>
                        <select name = "cod_dentista">
                            <option value = "">Selecione...</option>
                             <?php while($dentista = $den->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $dentista['cod_dentista'] ?>"><?php echo $dentista["nome_dentista"] ?></option>
			     <?php } ?>
                        </select>
                    </label> 
                   <label>
                        <span>Forma de Pagamento:</span>
                        <select name = "cod_tipo_pagamento">
                            <option value = "">Seleione...</option>
                             <?php while($servico = $ser->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $servico['cod_tipo_servico'] ?>"><?php echo $servico["desc_servico"]; $valor = $servico['valor']?></option>
			     <?php } ?>
                        </select>
                    </label> 
                    <br />
                    <br />
                    <label>
                        <span>Valor Total:</span>
                        &nbsp;&nbsp;<input type="text" name="valor" value=""/>
                    </label> 
                    <label>
                        <span>Parcelas:</span>
                        &nbsp;&nbsp;<input type="text" name="parcelas" value=""/>
                    </label> 
                    <label>
                        <span>Entrada: R$</span>
                        &nbsp;&nbsp;<input type="text" name="entrada" value=""/>
                    </label> 
                     <label>
                        <span>Desconto</span>
                        &nbsp;&nbsp;<input type="text" name="desconto" value=""/>%
                    </label>
               
                    &nbsp;&nbsp;<input type="button" name="calcular" value="Calcular"/>%
                    
                    <br />   
                </fieldset>  
                <br /> 
                <input  type="submit" name="adicionar" value="Adicionar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>



