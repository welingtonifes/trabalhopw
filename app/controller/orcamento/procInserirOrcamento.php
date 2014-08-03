<?php
    include ("../../../bd/crudGenerico.php");
     if(isset($_POST["proximo"])||($_POST["finalizar"])){
        if(isset($_POST["proximo"])){		
            $cod_paciente  = addslashes($_POST["cod_paciente"]);
            $data          = addslashes($_POST["data"]);
            $status        = 'andamento';
           


            $dados ="'$cod_paciente'"   .','. 
                    "'$data'"           .','.
                    "'$status'"         .','.
                    "''"     .','.
                    "''"     .','.
                    "''"     .','.
                    "''"     .','.
                    "''"     .','.
                    "''"     .','.
                    "''" ;

            $campos = " cod_paciente,data,status,cod_tipo_pagamento,valorTotal,valorFinal,desconto,entrada,baixa ";
            if(insere("orcamento", $campos, $dados)){
                $camp =  "cod_orcamento";
                $condicao= "ORDER BY cod_orcamento DESC LIMIT 1";
                $tab = "orcamento";
                $linha = seleciona($camp,$tab,$condicao);
                if(mnr($linha) ==0){
                        echo "Nenhum resultado encontrado";

                }
                $my = mfa($linha);
                   //echo $my['cod_orcamento'];
                   header('location: ../../../?id=35&cod_orcamento='.$my['cod_orcamento']);
                  // echo '<a href=?id=35&cod= '.$my['cod_orcamento'].' >Comprar</a>';
            }else{
               echo "Erro ao Adicionar!";
            } 
        }
            if(isset($_POST["finalizar"])){
            $cod_orcamento = addslashes($_POST["cod_orcamento"]);    
            $cod_tipo_pagamento = addslashes($_POST["cod_tipo_pagamento"]);
            $valorTotal = addslashes($_POST["valorTotal"]);
            $valorFinal = addslashes($_POST["valorFinal"]);
            $desconto = addslashes($_POST["desconto"]);
            $entrada = addslashes($_POST["entrada"]);
            $baixa = addslashes($_POST["baixa"]);


            $campos = " cod_tipo_pagamento= "    ."'$cod_tipo_pagamento'"      .','.
                    " valorTotal= "              ."'$valorTotal'"      .','.
                    " valorFinal ="              ."'$valorFinal'"      .','.
                    " desconto= "                ."'$desconto'"      .','.
                    " entrada ="                 ."'$entrada'"      .','.
                    " baixa ="                   ."'$baixa'";

            if(atualiza("orcamento", $campos, "cod_orcamento="."'$cod_orcamento'")){
                header('location: ../../../?id=8');
            }
            }else{
               echo "Erro ao Adicionar!";
            } 
    }else{
        echo "erro";
        //header('location: public/layout/manutencao.php');
    }
?>	
