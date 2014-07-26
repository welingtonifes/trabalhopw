<?php 
//para usar o select genérico.
    //include ("bd/crudGenerico.php");
    // Função para listar dentistas
    function listarDentista(){
   
        //informações para mandar ao select genérico
        $tabela = "dentista";
        $campos = "cod_dentista,nome";
        $condicao = "";
        
        //retorna dados do select
        $my = seleciona($campos,$tabela,$condicao);
        return $my;
    } 
?>