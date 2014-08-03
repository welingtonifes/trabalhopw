<?php
    include ("../../../bd/crudGenerico.php");
    if(isset($_POST["adicionar"])){
        var_dump($_POST);
       $cod_orcamento      = addslashes($_POST["cod_orcamento"]);
       $idServico      = addslashes($_POST["idServico"]);
       $cod_dente      = addslashes($_POST["cod_dente"]);
       $cod_dentista      = addslashes($_POST["cod_dentista"]);
      
       
      
    		
        $dados =
                "'$cod_orcamento'"       .','.
                "'$idServico'"  .','.
                "'$cod_dente'"       .','.
                "'$cod_dentista'" ;
                
                
                                        
        $campos = "cod_orcamento,idServico,cod_dente,cod_dentista";
        if(insere2("servico_executado", $campos, $dados)){ 
           
               header('location: ../../../?id=38&cod_orcamento='.$cod_orcamento);
              // echo '<a href=?id=34&cod= '.$my['cod_orcamento'].' >Comprar</a>';
        }else{
           echo "Erro ao Adicionar!";
        }        
    }else{
        echo "erro";
        //header('location: public/layout/manutencao.php');
    }
?>	
