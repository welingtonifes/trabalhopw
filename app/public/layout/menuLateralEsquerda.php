<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
      <head>
        <meta charset="UTF-8">  
        <title>SGCO</title>
    </head>
    <body>        
        <div id="menuLateralEsquerda">
            Bem vindo, <br />
            <?php 
                if (isset($_SESSION['nome'])){
                    echo $_SESSION['nome'];
            ?>
            &nbsp;[<a href="app/session/sair.php">sair</a>]
            <?php
            }else{
            ?>
                <br />Por favor, faça Login![<a href="?id=7">Entrar</a>]
            <?php } ?>                
            <?php
                include "menuEsquerdaModificavel.php";
            ?>
        </div> <!-- fim menuLateral -->

    </body>    
</html>