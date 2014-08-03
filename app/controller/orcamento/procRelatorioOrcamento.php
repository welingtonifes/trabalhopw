
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
				<td colspan="16"><h3>Orcamentos</h3></td>
			</tr>
			<tr>
                                <td>codigo</td>
				<td>Paciente</td>
				<td>data</td>
				<td>Valor</td>
                                <td>status</td>
                                <td>Alterar</td>
                                <td>Excluir</td>
			</tr>
                        <tr>
    <?php
        //chama o arquivo que pega os dados no banco antes de carregar o html abaixo.
        require ("procPesquisarOrcamento.php"); 
        while ($linha = mfa($my)) {
    ?>
                                <td><?php echo $linha['cod_orcamento'];?> </td>
				<td><?php echo $linha['nome_paciente'];?> </td>
				<td><?php echo $linha['data'];?> </td>
				<td><?php echo $linha['valorFinal'];?> </td>
				<td><?php echo $linha['status'];?> </td>
				<td><a href="?id=37 & cod_orcamento=<?php echo $linha['cod_orcamento'];?>"><img src="public/images/alterar.jpg" width="15" height="15"/></a></td>
			        <td><a href="app/controller/agenda/procDeletarAgenda.php?cod_orcamento=<?php echo $linha['cod_orcamento'];?>"><img src="public/images/excluir.jpg" width="15" height="15"/></a><br /></td>
				
			</tr>
    <?php
        }
    ?>
                    </table>
		  </center>
    </body>
</html>

