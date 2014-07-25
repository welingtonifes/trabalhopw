<?php ob_start();
    include("app/session/validarSession.php");
    include ("bd/crudGenerico.php");
    include("app/controller/agenda/funcAgenda.php");
    $den = listarDentista();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERAR CLIENTE</title>         
    </head>
    <body>      
        <form id="container" name="formAlterarCliente" method="POST" action="?id=17&idLateral=2">
                <fieldset>
                    <legend>&nbsp;&nbsp;Pesquisar Agenda: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <label>
                        <span>Nome Dentista:</span>
                        <select name = "cod_dentista">
                            <option value = "">Selecione..</option>
                             <?php while($dentista = $den->fetch_array(MYSQLI_ASSOC)) { ?>
                             <option value="<?php echo $dentista["cod_dentista"] ?>"><?php echo $dentista["nome_dentista"] ?></option>
			     <?php } ?>
                        </select>
                    </label> 
                     <label>  
                        <span>Data:</span>
                        <input size=30 type="text" id="campoData" class="jData" name="dt_agendamento"/>
                    </label>
                    <br /> 
                    <br />    
                </fieldset>  
                <br /> 
                <input  id="teste" type="submit" name="pesquisar" value="Pesquisar" class="submit"/>
                <input   type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>