<?php 
    //chama o arquivo que pega os dados no banco antes de carregar o html abaixo.
    require 'getDadosAgenda.php';
    include 'funcAgenda.php';
    $den = listarDentista();
    $hr = listarHorario();
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
                        <input type="text"  name="cod_agendamento" value="<?php echo $my['cod_agendamento']; ?>" disabled/> 
                        <input name="cod_agendamento" type="hidden" value="<?php echo $my['cod_agendamento']; ?>"/>
                    </label>
                    <br />
                    <br />
                    <label>
                        <span>Nome Paciente:</span>
                        <input type="text" size=50 name="cod_paciente" value="<?php echo $my['nome_paciente']; ?>" />        
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp
                    <label>
                        <span>Nome Dentista:</span>
                        <select name = "cod_dentista">
                            <option value = "<?php echo $my['cod_dentista']; ?>"><?php echo $my['nome_dentista']; ?></option>
                             <?php while($dentista = $den->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $dentista['cod_dentista'] ?>"><?php echo $dentista["nome_dentista"] ?></option>
			     <?php } ?>
                        </select>
                    </label> 
                    <br />
                    <br />
                    <label>  
                        <span>Data:</span>
                        <input type="text"  name="dt_agendamento"  id="data" class="jData" value ="<?php echo $my['dt_agendamento']; ?>"/>
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                    <label>
                        <span>Horario:</span>
                        <select name = "cod_horario">
                            <option value = "<?php echo $my['cod_horario']; ?>"><?php echo $my['horario']; ?></option>
                             <?php while($horario = $hr->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $horario['cod_horario'] ?>"><?php echo $horario["horario"] ?></option>
			     <?php } ?>
                        </select>
                    </label> 
                    
                    <br />   
                </fieldset>  
                <br /> 
                <input  type="submit" name="alterar" value="Alterar"  class="submit"/>
                <input  type="reset"  name="limpar" value="Limpar"  class="submit"/> Limpar nao funciona(consertar depois!)
            </form>  
    </body>
</html>