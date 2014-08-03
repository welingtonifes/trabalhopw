<?php
    //para usar o select genérico.
    //include ("bd/crudGenerico.php");
    /// Função para listar orçamentos///////
    function listarOrcamento($cod){
        $camp =  "*";
        $condicao= "WHERE cod_orcamento = $cod";
        $tab = "orcamento";
         
         $linha = seleciona($camp,$tab,$condicao);
                if(mnr($linha) ==0){
                        echo "Nenhum resultado encontrado";
                }
                $my = mfa($linha);
                return $my;
        }
    ///// Listar servicos prestados
    function listarServicoPrestado($cod){
        $camp =  "se.cod_orcamento,se.idServico,dt.desc_dente,d.nome_dentista,s.nome";
        $condicao= " WHERE se.cod_orcamento = '$cod' "
                . " AND se.cod_dente = dt.cod_dente "
                . " AND se.cod_dentista = d.cod_dentista "
                . " AND se.idServico = s.idServico ";
        $tab = "servico_executado se,"
                . "dente dt,"
                . "dentista d,"
                . "servicos s";
   
        $linha = seleciona($camp,$tab,$condicao);
                if(mnr($linha) ==0){
                        echo "Nenhum resultado encontrado";
                }
        return $linha;
        
    }
    /////Listar formas de pagamento //////////
    function listarTipoPagamento(){
        $camp =  "*";
        $condicao= "";
        $tab = "tipo_pagamento";
        $linha = seleciona($camp,$tab,$condicao);
                if(mnr($linha) ==0){
                        echo "Nenhum resultado encontrado";

                }
        return $linha;
    }
    /////// Listar Servicos ///////////////
    function listarServicos(){
        $camp =  "*";
        $condicao= "";
        $tab = "servicos";
        $linha = seleciona($camp,$tab,$condicao);
                if(mnr($linha) ==0){
                        echo "Nenhum resultado encontrado";

                }
        return $linha;
    }
     /////// Listar Dentistas ///////////////
    function listarDentista(){
        $camp =  "*";
        $condicao= "";
        $tab = "dentista";
        $linha = seleciona($camp,$tab,$condicao);
                if(mnr($linha) ==0){
                        echo "Nenhum resultado encontrado";

                }
        return $linha;
    }
     /////// Listar Dentes ///////////////
    function listarDente(){
        $camp =  "*";
        $condicao= "";
        $tab = "dente";
        $linha = seleciona($camp,$tab,$condicao);
                if(mnr($linha) ==0){
                        echo "Nenhum resultado encontrado";

                }
        return $linha;
    }
    function listarValor($idServico){
        $camp =  "*";
        $condicao= "WHERE idServico = $idServico";
        $tab = "servicos";
        $linha = seleciona($camp,$tab,$condicao);
                if(mnr($linha) ==0){
                        echo "Nenhum resultado encontrado";

                }
                
        $my = mfa($linha);
        return $my;
    }
    
?>
