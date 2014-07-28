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
                include "addFormCadastrarDentista.php";
                break;
            case 5:
                include "addFormCadastrarServico.php";
                break; 
            case 6:
                include "addFormCadastrarAtendente.php";
                break;
            case 7:
                include "addFormCadastrarDente.php";
                break;
           
        }
    }else{
        include("conteudoInicial.php");
    }
?>