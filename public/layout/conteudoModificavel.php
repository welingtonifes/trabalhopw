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
                include "app/views/agenda/RelatorioAgenda.php";
                break;
            case 16:
                include "app/controller/agenda/procGetAgenda.php";
                break;  
            case 17:
                include "app/controller/agenda/procExibirAgenda.php";
                break; 
            case 18:
                include "app/views/agenda/formPesquisarAgenda.php";
                break;
            case 19:
                include "app/views/servico/formCadastrarServico.php";
                break; 
            case 20:
                include "app/views/servico/formDeletarServico.php";
                break;
            case 21:
                include "app/views/servico/formAlterarServico.php";
                break;  
            case 22:
                include "app/controller/servico/procGetServico.php";
                break; 
            case 23:
                include "app/views/servico/relatorioServico.php";           
            case 24:
                include "app/views/atendente/formCadastrarAtendente.php";
                break; 
            case 25:
                include "app/views/atendente/formDeletarAtendente.php";
                break;
            case 26:
                include "app/views/atendente/formAlterarAtendente.php";
                break;  
            case 27:
                include "app/controller/atendente/procGetAtendente.php";
                break; 
            case 28:
                include "app/views/atendente/relatorioAtendente.php";  
            case 29:
                include "app/views/dente/formCadastrarDente.php";
                break; 
            case 30:
                include "app/views/dente/formDeletarDente.php";
                break;
            case 31:
                include "app/views/dente/formAlterarDente.php";
                break;  
            case 32:
                include "app/controller/dente/procGetDente.php";
                break; 
            case 33:
                include "app/views/dente/relatorioDente.php";
                break;
            case 34:
                include "app/views/orcamento/formCadastrarOrcamento.php";
                break; 
            case 35:
                include "app/views/orcamento/formCadastrarOrcamento_Servico.php";
                break;
            case 36:
                include "app/views/orcamento/formAlterarOrcamento.php";
                break;  
            case 37:
                include "app/controller/orcamento/procGetOrcamento.php";
                break; 
            case 38:
                include "app/views/orcamento/formItenOrcamento.php";
                break;
            case 40:
                include "app/controller/orcamento/procRelatorioOrcamento.php";
                break;
            case 41:
                include "app/views/orcamento/formPesquisarOrcamento.php";
                break;
            case 42:
                include "app/controller/orcamento/getDadosServivoOrcamento.php";
                break;
             case 43:
                include "app/views/orcamento/relatorioOrcamento.php";
                break;
            case 50:
                include "app/views/tipoPagamento/formCadastrarTipoPagamento.php";
                break;  
            case 51:
                include "app/views/tipoPagamento/formDeletarTipoPagamento.php";
                break;
            case 52:
                include "app/views/tipoPagamento/formAlterarTipoPagamento.php";
                break;  
            case 53:
                include "app/controller/tipoPagamento/procGetTipoPagamento.php";
                break; 
            case 54:
                include "app/views/tipoPagamento/relatorioTipoPagamento.php";
                break; 
            case 55:
                include "app/controller/tipoPagamento/procGetTipoPagamento.php";
                break;       
        }
    }else{
        include("conteudoInicial.php");
    }
?>