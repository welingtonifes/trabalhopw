<?php
    //para usar o update genérico. 
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["enviar"])){		
        $nome       = addslashes($_POST["nome"]);
        $cpf        = addslashes($_POST["cpf"]);
        $sexo       = addslashes($_POST["sexo"]);
        $nascimento = addslashes($_POST["nascimento"]);
        $email      = addslashes($_POST["email"]);
        $cep        = addslashes($_POST["cep"]); 
        $rua        = addslashes($_POST["rua"]);
        $numero     = addslashes($_POST["numero"]);        
        $cidade     = addslashes($_POST["cidade"]);
        $uf         = addslashes($_POST["uf"]);        
        $bairro     = addslashes($_POST["bairro"]);
        $telefone   = addslashes($_POST["telefone"]);
        $celular    = addslashes($_POST["telefoneCelular"]);
        $status     = addslashes($_POST["status"]);      
        
        $campos = "nome="      ."'$nome'"      .','. 
                  "cpf="       ."'$cpf'"       .','. 
                  "sexo="      ."'$sexo'"      .','. 
                  "nascimento="."'$nascimento'".','. 
                  "uf="        ."'$uf'"        .','. 
                  "cidade="    ."'$cidade'"    .','. 
                  "bairro="    ."'$bairro'"    .','. 
                  "rua="       ."'$rua'"       .','. 
                  "numero="    ."'$numero'"    .','. 
                  "cep="       ."'$cep'"       .','. 
                  "telefone="  ."'$telefone'"  .','. 
                  "celular="   ."'$celular'"   .','. 
                  "email="     ."'$email'"     .','. 
                  "status="    ."'$status'"                
                ;
        
        //usando a função de update genérico
        if(atualiza("clientes", $campos, "cpf="."'$cpf'")){
	    header('location: ../../../?id=8&idLateral=2');
	}else{
            echo "Erro ao Atualizar!";
//            header('location: public/layout/erro.php');
        }        
    }else{
        header('location: public/layout/manutencao.php');
    }  
?>	

