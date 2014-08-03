<?php
    include("app/session/validarSession.php");
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>RELATÓRIO DE ORÇAMENTOS</title>  
        <link rel="stylesheet" type="text/css" href="public/js/dataTables/media/js/jquery.dataTables.css">
        <script type="text/javascript" src="public/js/dataTables/media/js/jquery.dataTables.js"></script> 
<!--        <script type="text/javascript" src="public/js/dataTables/media/js/dataTables.tableTools.js"></script> -->
        <script type="text/javascript" src="public/js/dataTables/media/js/datatablesBase.js"></script> 
<!--        <script type="text/javascript" src="public/js/dataTables/media/js/datatables.Portuguese.txt"></script> -->
    </head>
    <body>  
        <div style="overflow:auto; margin-top: 5px; height: 90%;">
            <table id="todosOrcamentos" class="cell-border">
                <thead>
                    <tr>                        
                        <th>Codigo</th>
                        <th>Paciente</th>
                        <th>Data</th>
                        <th>Status</th>
                        <th>Valor</th>
                    </tr>                    
                </thead>
                <tbody></tbody>
            </table>            
        </div> 
    </body>
</html>