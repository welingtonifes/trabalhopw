<?php 
    //chama o arquivo que pega os dados no banco antes de carregar o html abaixo.
    require ("getDadosCliente.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERANDO CLIENTE</title>         
    </head>
    <body> 
        <form id="container" name="formGetCliente" method="POST" action="app/controller/cliente/procAlterarCliente.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Dados do Paciente para alterar: &nbsp;&nbsp;</legend>
                    <br /> 
                    <br />
                    <label>
                        <span>Nome:</span>
                        <input type="text" size=50 name="nome" value="<?php echo $my['nome']; ?>"/>        
                    </label>                     
                    <br />
                    <br />
                    <label>
                        <span>CPF:</span>
                        <input id="campoCpf" type="text" name="cpf" value="<?php echo $my['cpf']; ?>" readonly="readonly"/>  
                    </label> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>
                        <span>Sexo:</span>
                        <input id="sexo" type="radio" name="sexo"  value="Feminino"  <?php echo (($my['sexo'])=="Feminino")?"checked":"";?>/> Feminino                                                
                        <input id="sexo" type="radio" name="sexo"  value="Masculino" <?php echo (($my['sexo'])=="Masculino")?"checked":"";?>/> Masculino                         
                        
                    </label>                    
                    <br />
                    <br />
                    <label>  
                        <span>Email:</span>
                        <input size=30 type="email" name="email" value="<?php echo $my['email']; ?>"/> 
                    </label> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>
                        <span>Data de Nascimento:</span>
                        <input type="text" id="campoData" class="jData" name="nascimento" value="<?php echo $my['nascimento']; ?>"/> 
                    </label>                     
                    <br />   
                    <br />   
                    <label>
                        <span>Cep:</span>
                        <input size=14 id="cep" class="campoCep" type="text" name="cep" value="<?php echo $my['cep']; ?>"/> 
                    </label>
                    <label>
                        <span>Rua:</span>
                        <input size=37 id="rua" type="text" name="rua" value="<?php echo $my['rua']; ?>"/> 
                    </label>
                    <label>
                        <span>Número:</span>
                        <input size=6 type="text" name="numero" value="<?php echo $my['numero']; ?>"/> 
                    </label>   
                    <br /> 
                    <br /> 
                    <label>
                        <span>Cidade:</span>
                        <input id="cidade" size=30 type="text" name="cidade" value="<?php echo $my['cidade']; ?>"/> 
                    </label>
                    <label>
                        <span>Bairro:</span>
                        <input id="bairro" size=40 type="text" name="bairro" value="<?php echo $my['bairro']; ?>"/> 
                    </label>
                    <label>
                        <span>Estado:</span>
                        <input id="uf" size=5 type="text" name="uf" value="<?php echo $my['uf']; ?>"/> 
                    </label>                    
                    <br />
                    <br /> 
                    <label>
                        <span>Telefone:</span>
                        <input type="text" class="campoTelefone" name="telefone" value="<?php echo $my['telefone']; ?>"/> 
                    </label>
                    <label>
                        <span>Celular:</span>
                        <input type="text" class="campoTelefone" name="telefoneCelular" value="<?php echo $my['celular']; ?>"/> 
                    </label>
                    <label>
                        <span>Status:</span>
                        <input type="text" name="status" value="<?php echo $my['status']; ?>"/> 
                    </label>                    
                    <br /> 
                    <br />  
<!--                    <label>
                        <span>Foto:</span>
                        <input type="file" name="foto" class="file"/>
                    </label>-->
                    <br />   
                </fieldset>  
                <br /> 
                <input  type="submit" name="enviar" value="Enviar"  class="submit"/>
                <input  type="reset"  name="limpar" value="Limpar"  class="submit"/> Limpar nao funciona(consertar depois!)
            </form>  
    </body>
</html>