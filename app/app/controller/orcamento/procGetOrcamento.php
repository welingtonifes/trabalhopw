<?php 
    //chama o arquivo que pega os dados no banco antes de carregar o html abaixo.
    require 'getDadosProcOrcamento.php';
    include 'funcProcOrcamento.php';
    $den = listarDentista();
  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERANDO AGENDA</title>         
    </head>
    <body> 
        <form id="container" name="GetPaciente" method="POST" action="app/controller/agenda/procAlterarAgenda.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Dados do Agendamento para alterar: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                     <label>
                        <span>Codigo:</span>
                        &nbsp;&nbsp;<input type="text" name="valor" value = "<?php echo $my['cod_proc_orcamento']?>"/>
                    </label> 
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
                            <option value = "<?php echo $my['cod_dentista']; ?>"><?php echo $my['cod_dentista']; ?></option>
                             <?php while($dentista = $den->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $dentista['cod_dentista'] ?>"><?php echo $dentista["nome_dentista"] ?></option>
			     <?php } ?>
                        </select>
                    </label> 
                    <br />
                    <br />
                    <label>
                        <span>Valor:</span>
                        &nbsp;&nbsp;<input type="text" name="valor" value = "<?php echo $my['valor']?>"/>
                    </label>   
                </fieldset>  
                <br /> 
                <input  type="submit" name="alterar" value="Alterar"  class="submit"/>
                <input  type="reset"  name="limpar" value="Limpar"  class="submit"/> Limpar nao funciona(consertar depois!)
            </form>  
    </body>
</html>