<?php ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
      <head>
        <meta charset="UTF-8">  
        <title>SGCO</title>
        <link rel="stylesheet" type="text/css" href="public/styles/styleHome.css">
        
        <link rel="stylesheet" type="text/css" href="public/js/jquery-ui.min.css">
        <script type="text/javascript" src="public/js/jquery.js"></script> 
        <script type="text/javascript" src="public/js/jquery.ui.datepicker-pt-BR.js"></script> 
        <script type="text/javascript" src="public/js/jquery-ui.min.js"></script> 
        <script type="text/javascript" src="public/js/maskedInputPlugin.js"></script> 
        <script type="text/javascript" src="public/js/jqBase.js"></script>
        
    </head>
    <body>        
        <div id="foraDoSite">
            <?php 
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                include "public/layout/site.php";
            ?>
        </div> <!--fim foraDoSite    -->
    </body>    
</html>