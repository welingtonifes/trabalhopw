<?php 
    //chama o arquivo que pega os dados no banco antes de carregar o html abaixo.
    require 'getDadosOrcamento.php';
    include 'funcOrcamento.php';
    if(isset($_GET["cod_orcamento"])){
        $cod = $_GET['cod_orcamento'];
        $lo = listarOrcamento($cod);
        $ls = listarServicoPrestado($cod);
        $pg = listarTipoPagamento();
       
    } 
    else{
        echo "erro";
    }
  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERANDO ORÇAMENTO</title>         
    </head>
    <body> 
        <form id="container" name="GetPaciente" method="POST" action="app/controller/agenda/procAlterarAgenda.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Dados do Orçamento para alterar: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                     <label>
                        <span>Codigo:</span>
                        &nbsp;&nbsp;<input type="text" name="cod_orcamento" value="<?php echo $my['cod_orcamento'] ?>"/>
                    </label><br /><br />
                    <label>
                        <span>Paciente:</span>
                        &nbsp;&nbsp;<input type="text" name="cod_paciente" value="<?php echo $my['nome_paciente'] ?>"/>
                    </label>
                   <label>
                        <span>Data:</span>
                        &nbsp;&nbsp;<input type="text" name="data"  value="<?php echo $my['data'] ?>"/>
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
                &nbsp;&nbsp;<input type="text" name="valorTotal"  value="<?php echo $my['valorTotal']?>"/>
            </label><br /><br />
            <label>
                    <span>Parcelas:</span>
                    <input type="text" name="parcelas" value="<?php echo $my['parcelas']?>" size="2"/>
            </label>
            <label>
                <span>Forma de Pagamento:</span>
                <select name="cod_tipo_pagamento">
                    <option value="<?php echo $my['cod_tipo_pagamento'] ?>"><?php echo $my['nome_tipo_pagamento'] ?></option>
                    <?php while($pagamento = $pg->fetch_array(MYSQLI_ASSOC)) { ?>
                    <option value="<?php echo $pagamento["cod_tipo_pagamento"] ?>"><?php echo $pagamento["nome_tipo_pagamento"] ?></option>
                    <?php } ?>
                </select>
            </label><br /><br />
            <label>
                <span>Desconto:</span>
                &nbsp;&nbsp;<input type="text" name="desconto" value="<?php echo $my['desconto']?>" size="10"/>%
            </label><br /><br />
            <input type="button" name="calcular" value="Calcular" onclick="somarValor(this.form);">
             <label>
                <span>Valor Final:R$</span>
                &nbsp;&nbsp;<input type="text" name="valorFinal" value="<?php echo $my['valorFinal']?>"/>
            </label><br /><br />
             <label>
                <span>Entrada:R$</span>
                &nbsp;&nbsp;<input type="text" name="entrada" value="<?php echo $my['entrada']?>"/>
            </label>
             <label>
                <span>Baixa:</span>
                 <input id="sexo" type="radio" name="baixa"  value="baixa"  <?php echo $my['baixa']? "checked":"";?>/> 
            </label><br /><br />
              
            <br />   
            </fieldset>  
            <br /> 
            <input  type="submit" name="alterar" value="Alterar" class="submit"/>
            <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
        </form>  
    </body>
</html>