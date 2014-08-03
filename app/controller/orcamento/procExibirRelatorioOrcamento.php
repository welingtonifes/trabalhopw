<?php
     //pega os dados do banco e converte em json pra usar no datatables(jquery)
    //obs: só funcionou com PDO
    $pdo = new PDO('mysql:host=localhost;dbname=sgco', 'root', '');
    $pdo -> exec("SET CHARACTER SET utf8");
    $listar = $pdo->query('select o.cod_orcamento, p.nome_paciente,o.data,o.valorFinal,o.status '
            . 'from orcamento o, paciente p '
            .'WHERE o.cod_paciente = p.cod_paciente');
             
    echo json_encode($listar->fetchAll(PDO::FETCH_OBJ));
   
?>
