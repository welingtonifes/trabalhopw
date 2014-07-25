<?php
    include ("../../../bd/crudGenerico.php");
    
    if(isset($_POST["cadastrar"])){		
        $nome_dentista       = addslashes($_POST["nome_dentista"]);
        $cpf        = addslashes($_POST["cpf"]);
        $sexo       = addslashes($_POST["sexo"]);
        $nascimento = addslashes($_POST["dt"]);
        $email      = addslashes($_POST["email"]);
        $cep        = addslashes($_POST["cep"]);
        $rua        = addslashes($_POST["rua"]);
        $numero     = addslashes($_POST["numero"]);       
        $cidade     = addslashes($_POST["cod_cidade"]);
        $uf         = addslashes($_POST["sigla_uf"]);        
        $bairro     = addslashes($_POST["bairro"]);
        $telefone   = addslashes($_POST["telefone"]);
        $celular    = addslashes($_POST["celular"]);
        $status     = "ativo";
        $login      = addslashes($_POST["login"]);
        $senha      = md5(addslashes($_POST["senha"]));
//        $usuario    = filter_var($_POST["usuario"], FILTER_SANITIZE_STRING);
        
        
        $dados ="'$nome_dentista'"       .','. 
                "'$cpf'"        .','. 
                "'$sexo'"       .','. 
                "'$dt'" .','. 
                "'$sigla_uf'"         .','. 
                "'$cod_cidade'"     .','. 
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
        
        $campos = "nome_dentista,cpf,sexo,dt,sigla_uf,cod_cidade,bairro,rua,numero,cep,telefone,celular,email,status,login,senha";
        if(insere("dentista", $campos, $dados)){           
            header('location: ../../../?id=8&idLateral=3');            
	}else{
            echo "Erro ao Cadastrar!";
        }        
    }else{
        echo "erro";
        //header('location: public/layout/manutencao.php');
    }
?>
