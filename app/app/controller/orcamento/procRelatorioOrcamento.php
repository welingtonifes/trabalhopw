
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>ALTERANDO CLIENTE</title>   
        <link rel="stylesheet" type="text/css" href="public/styles/styleTabelaAgendamentos.css">
      
    </head>
    <body> 
             <center>
            <table border = "5" align = "center">
		    <tr>
				<td colspan="16"><h3>Agendamentos</h3></td>
			</tr>
			<tr>
                                <td>codigo</td>
				<td>Dente</td>
				<td>Procedimento</td>
				<td>Valor</td>
			</tr>
                        <tr>
    <?php
        //chama o arquivo que pega os dados no banco antes de carregar o html abaixo.
        require ("procPesquisarProcOrcamento.php"); 
        while ($linha = mfa($my)) {
    ?>
                                <td><?php echo $linha['cod_proc_orcamento'];?> </td>
				<td><?php echo $linha['cod_dente'];?> </td>
				<td><?php echo $linha['cod_tipo_servico'];?> </td>
				<td><?php echo $linha['valor'];?> </td>
				<td><?php echo $linha['horario'];?> </td>
				<td><a href="?id=16 & cod_proc_orcamento=<?php echo $linha['cod_proc_orcamento'];?>"><img src="public/images/alterar.jpg" width="15" height="15"/></a></td>
			        <td><a href="app/controller/agenda/procDeletarAgenda.php?cod_proc_orcamento=<?php echo $linha['cod_proc_orcamento'];?>"><img src="public/images/excluir.jpg" width="15" height="15"/></a><br /></td>
				
			</tr>
    <?php
        }
    ?>
                    </table>
		  </center>
    </body>
</html>

