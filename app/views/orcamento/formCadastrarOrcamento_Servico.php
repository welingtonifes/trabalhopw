<?php
    include ("app/session/validarSession.php");
    if(isset($_GET["cod_orcamento"])){
    $cod = $_GET['cod_orcamento'];
    include('bd/crudGenerico.php');
    include('app/controller/orcamento/funcOrcamento.php');
    $buscaServico = listarServicos();
    $buscaDente = listarDente();
    $buscaDentista = listarDentista();
    }
    else{
        echo "nenhum codigo chegou";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>CADASTRO DE ORÇAMENTO</title>         
    </head>
    <body>      
        <form id="container" name="formCadastrarServicoPrestado" method="POST" action="app/controller/orcamento/procInserirServicoPrestado.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Inserir Serviços: &nbsp;&nbsp;</legend>
                    <br /> 
                   
                        Codigo:
                        &nbsp;&nbsp;<input type="text" name="cod_orcamento" value="<?php echo $cod ?>"/>
                    <br /><br />
                    
                        Dente:
                        <select name = "cod_dente">
                            <option value = "">Selecione..</option>
                             <?php while($dente = $buscaDente->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $dente["cod_dente"] ?>"><?php echo $dente['desc_dente'].'   |  N° '.$dente['numero'].'   |Q-   '.$dente['quadrante']; ?></option>
			     <?php } ?>
                        </select>
                    
                    
                        Nome Dentista:
                        <select name = "cod_dentista">
                            <option value = "">Selecione..</option>
                             <?php while($dentista = $buscaDentista->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $dentista["cod_dentista"] ?>"><?php echo $dentista["nome_dentista"] ?></option>
			     <?php } ?>
                        </select>
                    
                    
                        Serviço:
                        <select name = "idServico">
                            <option value = "">Selecione..</option>
                             <?php while($servico = $buscaServico->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $servico["idServico"] ?>"><?php echo $servico["nome"] ?></option>
			     <?php } ?>
                        </select>
                    <br />   
                </fieldset>  
                <br /> 
                <input  type="submit" name="adicionar" value="Adicionar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>



