<?php
    if(isset($_GET["id"])){	
	switch($_GET["id"]){
            default :
                include "conteudoInicial.php";
                break;
            case 0:
                include "manutencao.php";
                break;                
            case 1:
                include "manutencao.php";
                break;
            case 2:
                include "app/views/cliente/formCadastrarCliente.php";
                break; 
            case 3:
                include "app/views/cliente/formDeletarCliente.php";
                break;
            case 4:
                include "app/views/cliente/formAlterarCliente.php";
                break;  
            case 5:
                include "app/controller/cliente/procGetCliente.php";
                break; 
            case 6:
                include "app/views/cliente/relatorioCliente.php";
                break;            
            case 7:
                include "app/formLogin.php";
                break;  
            case 8:
                include "operacaoSucesso.php";
                break;
            case 9:
                include "app/views/dentista/formCadastrarDentista.php";
                break; 
            case 10:
                include "app/views/dentista/formDeletarDentista.php";
                break;
            case 11:
                include "app/views/dentista/formAlterarDentista.php";
                break;  
            case 12:
                include "app/controller/dentista/procGetDentista.php";
                break; 
            case 13:
                include "app/views/dentista/relatorioDentista.php";
                break;            
            case 14:
                include "app/views/agenda/formCadastrarAgenda.php";
                break; 
            case 15:
                include "app/views/agenda/formDeletarAgenda.php";
                break;
            case 16:
                include "app/controller/agenda/procGetAgenda.php";
                break;  
            case 17:
                include "app/controller/agenda/procRelatorioAgenda.php";
                break; 
            case 18:
                include "app/views/agenda/formPesquisarAgenda.php";
                break;
        }
    }else{
        include("conteudoInicial.php");
    }
?>