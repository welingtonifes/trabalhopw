$(document).ready(function(){      
    $('#todosClientes').dataTable({
        "bProcessing":true,
        //arquivo que pega os dados no banco
        "sAjaxSource": "app/controller/cliente/procRelatorioCliente.php",
  //      "sPaginationType": "full_numbers",
        "bAutoWidth": true,
        //tradução do datatables
        "oLanguage": {"sUrl": "public/js/dataTables/media/js/datatables.Portuguese.txt"},
        "sAjaxDataProp": "",
        
        //colunas do banco para jogar no datatable
        "aoColumns":[
            {"mDataProp": "nome"},
            {"mDataProp": "cpf" },
            {"mDataProp": "sexo"},
            {"mDataProp": "nascimento"},
            {"mDataProp": "uf"},
            {"mDataProp": "cidade"},
            {"mDataProp": "bairro"},
            {"mDataProp": "rua"},
            {"mDataProp": "numero"},
            {"mDataProp": "cep"},
            {"mDataProp": "telefone"},
            {"mDataProp": "celular"},
            {"mDataProp": "email"},
            {"mDataProp": "status"}
//            {"mDataProp": "login"},
//            {"mDataProp": "senha"}                   
        ],
        //config do menu de quantas pagina deseja mostrar no datatable
        "aLengthMenu": [[6, 10, 25, 50, 100, 200, -1], [6,10, 25, 50, 100, 200, "All"]],
        
        //sScrollX": "200%, deixa aumenta o espaço das linhas do datatable, mas buga o efeiro dos menus
//        "sScrollX": "200%"
//        "autoWidth": false,
      //  "scrollY": 300%,
//        "dom": 'T<"clear">lfrtip',
//        
//        teste: converte os dados do datatable. nao funcionando
//        "tableTools": {
//            "sSwfPath": "copy_csv_xls_pdf.swf",
//            "aButtons": [
//                "copy",
//                "print",
//                {
//                    "sExtends":    "collection",
//                    "sButtonText": "Save",
//                    "aButtons":    [ "csv", "xls", "pdf" ]
//                }
//            ]
//
//        } 
    });

//FIM da função PAI    
});


$(document).ready(function(){      
    $('#todosServicos').dataTable({
        "bProcessing":true,
        //arquivo que pega os dados no banco
        "sAjaxSource": "app/controller/servico/procRelatorioServico.php",
  //      "sPaginationType": "full_numbers",
        "bAutoWidth": true,
        //tradução do datatables
        "oLanguage": {"sUrl": "public/js/dataTables/media/js/datatables.Portuguese.txt"},
        "sAjaxDataProp": "",
        
        //colunas do banco para jogar no datatable
        "aoColumns":[
            {"mDataProp": "nome"},
            {"mDataProp": "valor" },
            {"mDataProp": "status"},                 
        ],
        //config do menu de quantas pagina deseja mostrar no datatable
        "aLengthMenu": [[6, 10, 25, 50, 100, 200, -1], [6,10, 25, 50, 100, 200, "All"]],
        
        //sScrollX": "200%, deixa aumenta o espaço das linhas do datatable, mas buga o efeiro dos menus
//        "sScrollX": "200%"
//        "autoWidth": false,
      //  "scrollY": 300%,
//        "dom": 'T<"clear">lfrtip',
//        
//        teste: converte os dados do datatable. nao funcionando
//        "tableTools": {
//            "sSwfPath": "copy_csv_xls_pdf.swf",
//            "aButtons": [
//                "copy",
//                "print",
//                {
//                    "sExtends":    "collection",
//                    "sButtonText": "Save",
//                    "aButtons":    [ "csv", "xls", "pdf" ]
//                }
//            ]
//
//        } 
    });

//FIM da função PAI    
});

$(document).ready(function(){      
    $('#todosAtendentes').dataTable({
        "bProcessing":true,
        //arquivo que pega os dados no banco
        "sAjaxSource": "app/controller/atendente/procRelatorioAtendente.php",
  //      "sPaginationType": "full_numbers",
        "bAutoWidth": true,
        //tradução do datatables
        "oLanguage": {"sUrl": "public/js/dataTables/media/js/datatables.Portuguese.txt"},
        "sAjaxDataProp": "",
        
        //colunas do banco para jogar no datatable
        "aoColumns":[
            {"mDataProp": "nome"},
            {"mDataProp": "cpf" },
            {"mDataProp": "sexo"},
            {"mDataProp": "nascimento"},
            {"mDataProp": "uf"},
            {"mDataProp": "cidade"},
            {"mDataProp": "bairro"},
            {"mDataProp": "rua"},
            {"mDataProp": "numero"},
            {"mDataProp": "cep"},
            {"mDataProp": "telefone"},
            {"mDataProp": "celular"},
            {"mDataProp": "email"},
            {"mDataProp": "status"}
//            {"mDataProp": "login"},
//            {"mDataProp": "senha"}                   
        ],
        //config do menu de quantas pagina deseja mostrar no datatable
        "aLengthMenu": [[6, 10, 25, 50, 100, 200, -1], [6,10, 25, 50, 100, 200, "All"]],
        
        //sScrollX": "200%, deixa aumenta o espaço das linhas do datatable, mas buga o efeiro dos menus
//        "sScrollX": "200%"
//        "autoWidth": false,
      //  "scrollY": 300%,
//        "dom": 'T<"clear">lfrtip',
//        
//        teste: converte os dados do datatable. nao funcionando
//        "tableTools": {
//            "sSwfPath": "copy_csv_xls_pdf.swf",
//            "aButtons": [
//                "copy",
//                "print",
//                {
//                    "sExtends":    "collection",
//                    "sButtonText": "Save",
//                    "aButtons":    [ "csv", "xls", "pdf" ]
//                }
//            ]
//
//        } 
    });

//FIM da função PAI    
});

$(document).ready(function(){      
    $('#todosDentistas').dataTable({
        "bProcessing":true,
        //arquivo que pega os dados no banco
        "sAjaxSource": "app/controller/dentista/procRelatorioDentista.php",
  //      "sPaginationType": "full_numbers",
        "bAutoWidth": true,
        //tradução do datatables
        "oLanguage": {"sUrl": "public/js/dataTables/media/js/datatables.Portuguese.txt"},
        "sAjaxDataProp": "",
        
        //colunas do banco para jogar no datatable
        "aoColumns":[
            {"mDataProp": "nome_dentista"},
            {"mDataProp": "cpf" },
            {"mDataProp": "sexo"},
            {"mDataProp": "dt"},
            {"mDataProp": "sigla_uf"},
            {"mDataProp": "cod_cidade"},
            {"mDataProp": "bairro"},
            {"mDataProp": "rua"},
            {"mDataProp": "numero"},
            {"mDataProp": "cep"},
            {"mDataProp": "telefone"},
            {"mDataProp": "celular"},
            {"mDataProp": "email"},
            {"mDataProp": "status"}
//            {"mDataProp": "login"},
//            {"mDataProp": "senha"}                   
        ],
        //config do menu de quantas pagina deseja mostrar no datatable
        "aLengthMenu": [[6, 10, 25, 50, 100, 200, -1], [6,10, 25, 50, 100, 200, "All"]],
        
        //sScrollX": "200%, deixa aumenta o espaço das linhas do datatable, mas buga o efeiro dos menus
//        "sScrollX": "200%"
//        "autoWidth": false,
      //  "scrollY": 300%,
//        "dom": 'T<"clear">lfrtip',
//        
//        teste: converte os dados do datatable. nao funcionando
//        "tableTools": {
//            "sSwfPath": "copy_csv_xls_pdf.swf",
//            "aButtons": [
//                "copy",
//                "print",
//                {
//                    "sExtends":    "collection",
//                    "sButtonText": "Save",
//                    "aButtons":    [ "csv", "xls", "pdf" ]
//                }
//            ]
//
//        } 
    });

//FIM da função PAI    
});
$(document).ready(function(){      
    $('#todosAgendamentos').dataTable({
        "bProcessing":true,
        //arquivo que pega os dados no banco
        "sAjaxSource": "app/controller/agenda/procRelatorioAgenda.php",
  //      "sPaginationType": "full_numbers",
        "bAutoWidth": true,
        //tradução do datatables
        "oLanguage": {"sUrl": "public/js/dataTables/media/js/datatables.Portuguese.txt"},
        "sAjaxDataProp": "",
        
        //colunas do banco para jogar no datatable
        "aoColumns":[
            {"mDataProp": "nome_paciente"},
            {"mDataProp": "nome_dentista" },
            {"mDataProp": "dt_agendamento"},
            {"mDataProp": "horario"},
            
//                            
        ],
//            
        //config do menu de quantas pagina deseja mostrar no datatable
        "aLengthMenu": [[6, 10, 25, 50, 100, 200, -1], [6,10, 25, 50, 100, 200, "All"]],
        
        //sScrollX": "200%, deixa aumenta o espaço das linhas do datatable, mas buga o efeiro dos menus
//        "sScrollX": "200%"
//        "autoWidth": false,
      //  "scrollY": 300%,
//        "dom": 'T<"clear">lfrtip',
//        
//        teste: converte os dados do datatable. nao funcionando
//        "tableTools": {
//            "sSwfPath": "copy_csv_xls_pdf.swf",
//            "aButtons": [
//                "copy",
//                "print",
//                {
//                    "sExtends":    "collection",
//                    "sButtonText": "Save",
//                    "aButtons":    [ "csv", "xls", "pdf" ]
//                }
//            ]
//
//        } 
    });

//FIM da função PAI    
});

$(document).ready(function(){      
    $('#todosDentes').dataTable({
        "bProcessing":true,
        //arquivo que pega os dados no banco
        "sAjaxSource": "app/controller/dente/procRelatorioDente.php",
  //      "sPaginationType": "full_numbers",
        "bAutoWidth": true,
        //tradução do datatables
        "oLanguage": {"sUrl": "public/js/dataTables/media/js/datatables.Portuguese.txt"},
        "sAjaxDataProp": "",
        
        //colunas do banco para jogar no datatable
        "aoColumns":[
            {"mDataProp": "desc_dente"},
            {"mDataProp": "numero" },
            {"mDataProp": "quadrante"},
            {"mDataProp": "status"},
            
//                            
        ],
//            
        //config do menu de quantas pagina deseja mostrar no datatable
        "aLengthMenu": [[6, 10, 25, 50, 100, 200, -1], [6,10, 25, 50, 100, 200, "All"]],
        
        //sScrollX": "200%, deixa aumenta o espaço das linhas do datatable, mas buga o efeiro dos menus
//        "sScrollX": "200%"
//        "autoWidth": false,
      //  "scrollY": 300%,
//        "dom": 'T<"clear">lfrtip',
//        
//        teste: converte os dados do datatable. nao funcionando
//        "tableTools": {
//            "sSwfPath": "copy_csv_xls_pdf.swf",
//            "aButtons": [
//                "copy",
//                "print",
//                {
//                    "sExtends":    "collection",
//                    "sButtonText": "Save",
//                    "aButtons":    [ "csv", "xls", "pdf" ]
//                }
//            ]
//
//        } 
    });

//FIM da função PAI    
});

$(document).ready(function(){      
    $('#todosTipoPagamentos').dataTable({
        "bProcessing":true,
        //arquivo que pega os dados no banco
        "sAjaxSource": "app/controller/tipoPagamento/procRelatorioTipoPagamento.php",
  //      "sPaginationType": "full_numbers",
        "bAutoWidth": true,
        //tradução do datatables
        "oLanguage": {"sUrl": "public/js/dataTables/media/js/datatables.Portuguese.txt"},
        "sAjaxDataProp": "",
        
        //colunas do banco para jogar no datatable
        "aoColumns":[
            {"mDataProp": "nome_tipo_pagamento"},
            {"mDataProp": "descricao_tipo_pagamento"},
            {"mDataProp": "status_tipo_pagamento"}                          
        ],
//            
        //config do menu de quantas pagina deseja mostrar no datatable
        "aLengthMenu": [[6, 10, 25, 50, 100, 200, -1], [6,10, 25, 50, 100, 200, "All"]],
        
        //sScrollX": "200%, deixa aumenta o espaço das linhas do datatable, mas buga o efeiro dos menus
//        "sScrollX": "200%"
//        "autoWidth": false,
      //  "scrollY": 300%,
//        "dom": 'T<"clear">lfrtip',
//        
//        teste: converte os dados do datatable. nao funcionando
//        "tableTools": {
//            "sSwfPath": "copy_csv_xls_pdf.swf",
//            "aButtons": [
//                "copy",
//                "print",
//                {
//                    "sExtends":    "collection",
//                    "sButtonText": "Save",
//                    "aButtons":    [ "csv", "xls", "pdf" ]
//                }
//            ]
//
//        } 
    });

//FIM da função PAI    
});
$(document).ready(function(){      
    $('#todosOrcamentos').dataTable({
        "bProcessing":true,
        //arquivo que pega os dados no banco
        "sAjaxSource": "app/controller/orcamento/procExibirRelatorioOrcamento.php",
  //      "sPaginationType": "full_numbers",
        "bAutoWidth": true,
        //tradução do datatables
        "oLanguage": {"sUrl": "public/js/dataTables/media/js/datatables.Portuguese.txt"},
        "sAjaxDataProp": "",
        
        //colunas do banco para jogar no datatable
        "aoColumns":[
            {"mDataProp": "cod_orcamento"},
            {"mDataProp": "nome_paciente" },
            {"mDataProp": "data"},
            {"mDataProp": "status"},
            {"mDataProp": "valorFinal"},

            
//                            
        ],
//            
        //config do menu de quantas pagina deseja mostrar no datatable
        "aLengthMenu": [[6, 10, 25, 50, 100, 200, -1], [6,10, 25, 50, 100, 200, "All"]],
        
        //sScrollX": "200%, deixa aumenta o espaço das linhas do datatable, mas buga o efeiro dos menus
//        "sScrollX": "200%"
//        "autoWidth": false,
      //  "scrollY": 300%,
//        "dom": 'T<"clear">lfrtip',
//        
//        teste: converte os dados do datatable. nao funcionando
//        "tableTools": {
//            "sSwfPath": "copy_csv_xls_pdf.swf",
//            "aButtons": [
//                "copy",
//                "print",
//                {
//                    "sExtends":    "collection",
//                    "sButtonText": "Save",
//                    "aButtons":    [ "csv", "xls", "pdf" ]
//                }
//            ]
//
//        } 
    });

//FIM da função PAI    
});