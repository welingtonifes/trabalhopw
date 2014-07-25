<?php ob_start();
    include("app/session/validarSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>RELATÓRIO DE CLIENTES</title>  
        <!--<link rel="stylesheet" type="text/css" href="app/public/styles/styleTabelaAgendamentos.css">!-->
       <style type="text/css">
      table
      {
        font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
        width:100%;
        border-collapse:collapse;
      }
      #table #td, #th
      {
        border:1px solid #2424FF;
        padding:3px 7px 2px 7px;
      }
      #table #th
      {
        font-size:1.2em;
        text-align:left;
        padding-top:5px;
        padding-bottom:4px;
        background-color:#2E82FF;
        color:#fff;
      }
      table tr.alt td
      {
        color:#000;
        background-color:#D6EDFF;
      }
    </style>
    </head>
    <body>  
        <div style="overflow:auto; margin-top: 5px; height: 90%;">
            <table id="table" class="cell-border">
                <thead>
                    <tr>                        
                        <th>Nome</th>
                        <th>Cpf</th>
                        <th>Sexo</th>
                        <th>Nascimento</th>
                        <th>Uf</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>Rua</th>
                        <th>Nº</th>
                        <th>Cep</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>                    
                </thead>
                <tbody></tbody>
            </table>            
        </div> 
    </body>
</html>