<?php
    include ("app/session/validarSession.php");
    include ("bd/crudGenerico.php");
    include('app/controller/orcamento/funcOrcamento.php');
    if(isset($_GET["cod_orcamento"])){
        $cod = $_GET['cod_orcamento'];
        $lo = listarOrcamento($cod);
        $ls = listarServicoPrestado($cod);
        $pg = listarTipoPagamento();
       
    }   
 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <script tabindex="text/javascript" src="app/controller/orcamento/scriptsOrcamento.js"></script>
        <title>CADASTRO DE ORÇAMENTO</title>         
    </head>
    <body>      
        <form id="container" name="formCadastrarOrcamento" method="POST" action="app/controller/orcamento/procInserirOrcamento.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe os dados do Orçamento: &nbsp;&nbsp;</legend>
                    <br /> 
                    <label>
                        <span>Codigo:</span>
                        &nbsp;&nbsp;<input type="text" name="cod_orcamento" value="<?php echo $cod ?>"/>
                    </label><br /><br />
                    <label>
                        <span>Paciente:</span>
                        &nbsp;&nbsp;<input type="text" name="cod_paciente" value="<?php echo $lo['cod_paciente'] ?>"/>
                    </label>
                   <label>
                        <span>Data:</span>
                        &nbsp;&nbsp;<input type="text" name="data"  value="<?php echo $lo['data'] ?>"/>
                    </label><br /><br />
                    
                    <table border="3">
        <caption>Servicos Adicionados</caption>
        <thead>
          <tr>
            <th width="89">Dente</th>
            <th width="100">Dentista</th>
            <th width="79">Servico</th>
            <th width="64">Valor</th>
            <th width="64">Alterar</th>
            <th width="64">Excluir</th>
          </tr>
         
        </thead>
    <?php
        //chama o arquivo que pega os dados no banco antes de carregar o html abaixo.
         $total =0.0;
         
        while ($linha = mfa($ls)) {
            $buscaValor= listarValor($linha['idServico']);
            $valor = $buscaValor['valor'];
            $total +=  $valor;
            
    ?>
	    <td><?php echo $linha['desc_dente'];?> </td>
	    <td><?php echo $linha['nome_dentista'];?> </td>
             <td><?php echo $linha['nome'];?> </td>
	    <td><?php echo $valor;?> </td>
            <td><a href="app/controller/orcamento/procGetDadosServicoOrcamento.php?cod_orcamento=<?php echo $linha['cod_orcamento'];?>&idServico=<?php echo $linha['idServico'];?>"><img src="public/images/alterar.jpg" width="15" height="15"/></a><br /></td>
	    <td><a href="app/controller/orcamento/procDeletarServicoPrestado.php?cod_orcamento=<?php echo $linha['cod_orcamento'];?>&idServico=<?php echo $linha['idServico'];?>"><img src="public/images/excluir.jpg" width="15" height="15"/></a><br /></td>
				
	    </tr>
    <?php    
    
        }
    ?>
            </table><br />

            <a href="?id=35&cod_orcamento=<?php echo $lo['cod_orcamento'];?>">Adicionar&nbsp;&nbsp;<img src="public/images/botaoAdicionar.jpg" width="30" height="30"/></a>
            <br /><br />
            <label>
                <span>Valor Total:R$</span>
                &nbsp;&nbsp;<input type="text" name="valorTotal"  value="<?php echo $total?>"/>
            </label><br /><br />
            <label>
                    <span>Parcelas:</span>
                    <input type="text" name="parcelas" value="" size="2"/>
            </label>
            <label>
                <span>Forma de Pagamento:</span>
                <select name="cod_tipo_pagamento">
                    <option value="">Selecione..</option>
                    <?php while($pagamento = $pg->fetch_array(MYSQLI_ASSOC)) { ?>
                    <option value="<?php echo $pagamento["cod_tipo_pagamento"] ?>"><?php echo $pagamento["nome_tipo_pagamento"] ?></option>
                    <?php } ?>
                </select>
            </label><br /><br />
            <label>
                <span>Desconto:</span>
                &nbsp;&nbsp;<input type="text" name="desconto" value="" size="10"/>%
            </label><br /><br />
            <input type="button" name="calcular" value="Calcular" onclick="somarValor(this.form);">
             <label>
                <span>Valor Final:R$</span>
                &nbsp;&nbsp;<input type="text" name="valorFinal" value=""/>
            </label><br /><br />
             <label>
                <span>Entrada:R$</span>
                &nbsp;&nbsp;<input type="text" name="entrada" value=""/>
            </label>
             <label>
                <span>Baixa:</span>
                &nbsp;&nbsp;<input type="radio" name="baixa" value="baixa"/>
            </label><br /><br />
              
            <br />   
            </fieldset>  
            <br /> 
            <input  type="submit" name="finalizar" value="Finalizar" class="submit"/>
            <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
        </form>  
    </body>
</html>




