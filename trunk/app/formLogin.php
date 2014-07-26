<html lang="pt-br">
    <head>
        <meta charset="UTF-8">  
        <title>:: Logar no Sistema! ::</title>	
    </head>
    <body>
        <form name="form1" method="post" action="app/procLogin.php">
            <fieldset>
                <legend>&nbsp;&nbsp;Informe seu Usuário e Senha para entrar no Sistema: &nbsp;&nbsp;</legend>
                <br />
                <label>
                    <span>Usuário:</span>
                    <input size="25" name="login" type="text" value="" />
                </label>
                <br />
                <label>
                    <span>Senha:&nbsp;&nbsp</span>
                    <input size="25" name="senha" type="password" value="" />
                </label>                    
                <br /> 
                <br />    
            </fieldset>
            <br /> 
                <input  type="submit" name="entrar" value="Entrar" class="submit"/>
                <input  type="reset" name="limpar" value="Limpar" class="submit"/>
        </form>		
    </body>	
</html>

  