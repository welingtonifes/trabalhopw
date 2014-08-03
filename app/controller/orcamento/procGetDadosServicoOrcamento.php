<?php
    include ("../../session/validarSession.php");
    if(isset($_GET['idServico'])){
    $cod_servico = $_GET['idServico'];
    include('../../../bd/crudGenerico.php');
    require('getDadosServicoOrcamento.php');
    include('funcOrcamento.php');
    $buscaServico = listarServicos();
    $buscaDente = listarDente();
    $buscaDentista = listarDentista();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>CADASTRO DE ORÇAMENTO</title>         
    </head>
    <body>      
        <form id="container" name="formCadastrarServicoPrestado" method="POST" action="procAlterarServicoPrestado.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Inserir Serviços: &nbsp;&nbsp;</legend>
                    <br /> 
                   
                        Codigo:
                        &nbsp;&nbsp;<input type="text" name="cod_orcamento" value="<?php echo $my['cod_orcamento'] ?>"/>
                        &nbsp;&nbsp;<input type="hidden" name="cod_servico" value="<?php echo $cod_servico ?>"/>
                    <br /><br />
                    
                        Dente:
                        <select name = "cod_dente">
                            <option value = "<?php echo $my['cod_dente'] ?>"><?php echo $my['desc_dente'] ?></option>
                             <?php while($dente = $buscaDente->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $dente["cod_dente"] ?>"><?php echo $dente['desc_dente'].'   |  N° '.$dente['numero'].'   |Q-   '.$dente['quadrante']; ?></option>
			     <?php } ?>
                        </select>
                    
                    
                        Nome Dentista:
                        <select name = "cod_dentista">
                            <option value = "<?php echo $my['cod_dentista'] ?>"><?php echo $my['nome_dentista'] ?></option>
                             <?php while($dentista = $buscaDentista->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $dentista["cod_dentista"] ?>"><?php echo $dentista["nome_dentista"] ?></option>
			     <?php } ?>
                        </select>
                    
                    
                        Serviço:
                        <select name = "idServico">
                            <option value = "<?php echo $my['idServico'] ?>"><?php echo $my['nome'] ?></option>
                             <?php while($servico = $buscaServico->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $servico["idServico"] ?>"><?php echo $servico["nome"] ?></option>
			     <?php } ?>
                        </select>
                    <br />   
                </fieldset>  
                <br /> 
                <input  type="submit" name="alterar" value="alterar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>




