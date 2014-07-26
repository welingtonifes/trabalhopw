<?php
    //para usar o select genérico.
    //include ("bd/crudGenerico.php");
    // Função para listar dentistas
    function listarDentista(){
   
        //informações para mandar ao select genérico
        $tabela = "dentista";
        $campos = "cod_dentista,nome_dentista";
        $condicao = "";
        
        //retorna dados do select
        $my = seleciona($campos,$tabela,$condicao);
        
        return $my;
    } 
    
    
     // Função para listar horarios
   	function listarPaciente(){
   
        //informações para mandar ao select genérico
        $tabela = "paciente";
        $campos = "cod_paciente,nome_paciente";
        $condicao = "WHERE ";
        
        //retorna dados do select
        $my = seleciona($campos,$tabela,$condicao);
        return $my;
    } 
   function somaValor(){
       $tabela = "procedimento_orcamento";
       $campos = "valor";
       $condicao = "WHERE cod_orcamento ='$cod_orcamento'";
       $my = seleciona($campos,$tabela,$condicao);
       
       while ($linha = mysql_fetch_array($my)) {
           $total = $total + $linha['valor'];
           
       }
       return $total;
   }
   
?>
