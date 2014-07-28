<?php
     //pega os dados do banco e converte em json pra usar no datatables(jquery)
    //obs: só funcionou com PDO
    $pdo = new PDO('mysql:host=localhost;dbname=sgco', 'root', '');
    $pdo -> exec("SET CHARACTER SET utf8");
    $listar = $pdo->query('select p.nome_paciente,d.nome_dentista,a.dt_agendamento,h.horario '
            . 'from agenda a, paciente p, dentista d, horario h '
            . 'WHERE a.cod_paciente = p.cod_paciente'
            . '  AND a.cod_dentista = d.cod_dentista'
            . '  AND a.cod_horario = h.cod_horario'); 
    echo json_encode($listar->fetchAll(PDO::FETCH_OBJ));
   
?>
