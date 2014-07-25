<?php
    //para usar o select genérico.
   include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["alterar"])){		
        $cpf = addslashes($_POST["cpf"]);
        //informações para mandar ao select genérico
        $tabela = "dentista";
        $campos = "nome,cpf,sexo,dt,sigla_uf,cod_cidade,bairro,rua,numero,cep,telefone,celular,email,status";
        $condicao = " WHERE cpf="."'$cpf'";
        
        //retorna dados do select
        $my = mfa(seleciona($campos,$tabela,$condicao));
        
    }else{
        echo "erro";
//        header("location:   http://localhost/sgco/?id=5");
    }   
?>
