<?php
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["cadastrar"])){		
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
        $status     = "ativo";
        $login      = addslashes($_POST["login"]);
        $senha      = md5(addslashes($_POST["senha"]));
//        $usuario    = filter_var($_POST["usuario"], FILTER_SANITIZE_STRING);
        
        
        $dados ="'$nome'"       .','. 
                "'$cpf'"        .','. 
                "'$sexo'"       .','. 
                "'$nascimento'" .','. 
                "'$uf'"         .','. 
                "'$cidade'"     .','. 
                "'$bairro'"     .','. 
                "'$rua'"        .','. 
                "'$numero'"     .','. 
                "'$cep'"        .','. 
                "'$telefone'"   .','. 
                "'$celular'"    .','. 
                "'$email'"      .','.  
                "'$status'"     .','.
                "'$login'"      .','.
                "'$senha'";
        
        $campos = "nome,cpf,sexo,nascimento,uf,cidade,bairro,rua,numero,cep,telefone,celular,email,status,login,senha";
        if(insere("atendentes", $campos, $dados)){           
            header('location: ../../../?id=8&idLateral=2');            
	}else{
            echo "Erro ao Cadastrar!";
        }        
    }else{
        echo "erro";
        //header('location: public/layout/manutencao.php');
    }
?>	
