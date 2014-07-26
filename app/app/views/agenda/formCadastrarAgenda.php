<?php
    include ("app/session/validarSession.php");
    include ("bd/crudGenerico.php");
    include("app/controller/agenda/funcAgenda.php");
    $den = listarDentista();
    $hr = listarHorario();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
       
        <title>CADASTRO DE AGENDAMENTOS</title>
      
        
    <body>      
        <form id="container" name="formCadastrarAgenda" method="POST" action="app/controller/agenda/procInserirAgenda.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe os dados do Agendamento: &nbsp;&nbsp;</legend>
                    <br /> 
                    <label>
                        <span>Nome Paciente:</span>
                        <input type="text" size=50 name="cod_paciente" id ="nome" />  
                       
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp
                    <label>
                        <span>Nome Dentista:</span>
                        <select name = "cod_dentista">
                            <option value = "">Selecione..</option>
                             <?php while($dentista = $den->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $dentista["cod_dentista"] ?>"><?php echo $dentista["nome_dentista"] ?></option>
			     <?php } ?>
                        </select>
                    </label> 
                    <br />
                    <br />
                    <label>  
                        <span>Data:</span>
                        <input size=30 type="text" id="data" class="jData" name="dt_agendamento"/>
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                    <label>
                        <span>Horario:</span>
                        <select name = "cod_horario">
                            <option value = "">Selecione..</option>
                             <?php while($horario = $hr->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $horario["cod_horario"] ?>"><?php echo $horario["horario"] ?></option>
			     <?php } ?>
                        </select>
                    </label> 
                    <br />   
                </fieldset>  
                <br /> 
                <input  type="submit" name="cadastrar" value="Cadastrar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>