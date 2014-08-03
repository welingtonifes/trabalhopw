<?php
     //pega os dados do banco e converte em json pra usar no datatables(jquery)
    //obs: só funcionou com PDO
    $pdo = new PDO('mysql:host=localhost;dbname=sgco', 'root', '');
    $pdo -> exec("SET CHARACTER SET utf8");
    $listar = $pdo->query('select * from tipo_pagamento'); 
    echo json_encode($listar->fetchAll(PDO::FETCH_OBJ));
   
?>
