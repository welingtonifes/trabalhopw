<?php ob_start();
    include("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>CADASTRO DE CLIENTE</title>         
    </head>
    <body>      
        <form id="container" name="formCadatrarCliente" method="POST" action="app/controller/cliente/procInserirCliente.php">
                <fieldset>
                    <legend>&nbsp;&nbsp;Informe os dados do Paciente: &nbsp;&nbsp;</legend>
                    <br /> 
                    <label>
                        <span>Nome:</span>
                        <input type="text" size=50 name="nome" />        
                    </label>                     
                    <br />
                    <br />
                    <label>
                        <span>CPF:</span>
                        &nbsp;&nbsp;<input id="campoCpf" type="text" name="cpf"/>
                    </label> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>
                        <span>Sexo:</span>
                        <input id="sexo" type="radio" name="sexo" value="Feminino" /> Feminino
                        <input id="sexo" type="radio" name="sexo" value="Masculino"/> Masculino
                    </label>                    
                    <br />
                    <br />
                    <label>  
                        <span>Email:</span>
                        <input size=30 type="email" name="email"/>
                    </label> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>
                        <span>Data de Nascimento:</span>
                        <input type="text" id="campoData" class="jData" name="nascimento"/>
                    </label>                     
                    <br />   
                    <br />   
                    <label>
                        <span>Cep:</span>
                        &nbsp;&nbsp;<input size=14 id="cep" class="campoCep" type="text" name="cep"/>
                    </label>
                    <label>
                        <span>Rua:</span>
                        <input size=37 id="rua" type="text" name="rua" />
                    </label>
                    <label>
                        <span>Número:</span>
                        <input size=6 type="text" name="numero"/>
                    </label>   
                    <br /> 
                    <br /> 
                    <label>
                        <span>Cidade:</span>
                        &nbsp;&nbsp;<input id="cidade" size=30 type="text" name="cidade"/>
                    </label>
                    <label>
                        <span>Bairro:</span>
                        <input id="bairro" size=30 type="text" name="bairro"/>
                    </label>
                    <label>
                        <span>Estado:</span>
                        <input id="uf" size=5 type="text" name="uf"/>
                    </label>                    
                    <br />
                    <br /> 
                    <label>
                        <span>Telefone:</span>
                        <input type="text" class="campoTelefone" name="telefone"/>
                    </label>
                    <label>
                        <span>Celular:</span>
                        <input type="text" class="campoTelefone" name="telefoneCelular"/>
                    </label>
                    <br /> 
                    <br />
                    <label>
                        <span>Usuário:</span>
                        &nbsp;<input type="text" name="login"/>
                    </label>
                    <label>
                        <span>Senha:</span>
                        <input type="text"  name="senha"/>
                    </label>
<!--                    <label>
                        <span>Comfirmar Senha:</span>
                        <input type="text"  name="senha"/>
                    </label>                    -->
                    <br />                     
                    <br />  
<!--                    <label>
                        <span>Foto:</span>
                        <input type="file" name="foto" class="file"/>
                    </label>-->
                    <br />   
                </fieldset>  
                <br /> 
                <input  type="submit" name="cadastrar" value="Cadastrar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/> 
            </form>  
    </body>
</html>