<?php
    //para usar o update genérico. 
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["enviar"])){		
        $nome       = addslashes($_POST["nome"]);
        $cpf        = addslashes($_POST["cpf"]);
        $sexo       = addslashes($_POST["sexo"]);
        $dt = addslashes($_POST["dt"]);
        $email      = addslashes($_POST["email"]);
        $cep        = addslashes($_POST["cep"]); 
        $rua        = addslashes($_POST["rua"]);
        $numero     = addslashes($_POST["numero"]);        
        $cod_cidade     = addslashes($_POST["cod_cidade"]);
        $sigla_uf         = addslashes($_POST["sigla_uf"]);        
        $bairro     = addslashes($_POST["bairro"]);
        $telefone   = addslashes($_POST["telefone"]);
        $celular    = addslashes($_POST["telefoneCelular"]);
        $status     = addslashes($_POST["status"]);      
        
        $campos = "nome="      ."'$nome'"      .','. 
                  "cpf="       ."'$cpf'"       .','. 
                  "sexo="      ."'$sexo'"      .','. 
                  "dt="."'$dt'".','. 
                  "sigla_uf="        ."'$sigla_uf'"        .','. 
                  "cod_cidade="    ."'$cod_cidade'"    .','. 
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
        if(atualiza("dentista", $campos, "cpf="."'$cpf'")){
	    header('location: ../../../?id=8&idLateral=3');
	}else{
            echo "Erro ao Atualizar!";
//            header('location: public/layout/erro.php');
        }        
    }else{
        header('location: public/layout/manutencao.php');
    }  
?>