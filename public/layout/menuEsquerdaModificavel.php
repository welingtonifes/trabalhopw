<?php
    if(isset($_GET["idLateral"])){	
	switch($_GET["idLateral"]){
            default :
                include "conteudoInicial.php";
                break;
            case 0:
                include "manutencao.php";
                break;    
            case 1:
                include "conteudoInicial.php";
                break;
            case 2:
                include "addFormCadastrarCliente.php";
                break;  
            case 3:
                include "AddFormCadastrarDentista.php";
                break;
            case 5:
                include "addFormCadastrarServico.php";
                break;            
           
        }
    }else{
        include("conteudoInicial.php");
    }
?>