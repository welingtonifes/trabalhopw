//inicio da função PAI
$(function(){
    //inicio da função calendário jquery 
    $('.jData').datepicker({
        showAnim: "fadeIn",
        showOtherMonths: true,
        selectOtherMonths: true,
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,
        showOn: "button",
        buttonImage: 'public/images/calendar.png',
        buttonImageOnly: true,
        minDate: new Date(1960, 1 - 1, 1),
        buttonText: "Abrir Calendário",
        gotoCurrent: true
        
    });
    
    $('.jData').css({
        width: '80px'
    }); 
    
    $('.ui-datepicker-trigger').css({
        padding: '0px',
        float: 'both',
        cursor: 'pointer',
        position: 'absolute',
    }); 
 
//botoes jquery
    $('input:submit').button(); 
    $('input:reset').button();      
        
    
//inicio da função pega dados pelo cep na net   
    $("#cep").blur(function(){
        consulta = $("#cep").val()            
        var url = "http://cep.correiocontrol.com.br/" + consulta + ".json";   
        $.ajax({
            url: url,
            type:'GET',
            dataType: 'json',
            success: function(json){
                $("#cidade").val(json.localidade)
                $("#uf").val(json.uf) 
                $("#bairro").val(json.bairro)
                $("#rua").val(json.logradouro)
            },
        });
    });
    
 //inicio das maskaras 
    $("#campoData").mask("99/99/9999");
    $(".campoTelefone").mask("(99)9999-9999");
 //   $(".campoCep").mask("99.999-999");
    $("#campoCpf").mask("999.999.999-99");
    $("#campoSenha").mask("***-****");
   
   
 //inicio da função do menu superior
    $("#menu li a").mouseover(function(){
        var index = $("#menu li a").index(this);
        $("#menu li").eq(index).children("ul").slideDown(0);

        if($(this).siblings('ul').size() > 0){
                return false;
        }
    });

    $("#menu li").mouseleave(function(){
        var index = $("#menu li").index(this);
        $("#menu li").eq(index).children("ul").slideUp(0);
    });
   
     
    //MASCARA PARA O CAMPO CELULAR 8/9 DIGITOS
    $("#celular").bind('input propertychange',function(){
        // pego o valor do telefone
        var texto = $(this).val();
        // Tiro tudo que não é numero
        texto = texto.replace(/[^\d]/g, '');
        // Se tiver alguma coisa
        if (texto.length > 0){
        // Ponho o primeiro parenteses do DDD   
        texto = "(" + texto; 
            if (texto.length > 3) {
                // Fecha o parenteses do DDD
                texto = [texto.slice(0, 3), ") ", texto.slice(3)].join(''); 
            }
            if (texto.length > 12) {     
                // Se for 13 digitos ( DDD + 9 digitos) ponhe o traço no quinto digito           
                if (texto.length > 13)
                    texto = [texto.slice(0, 10), "-", texto.slice(10)].join('');
                else
                 // Se for 12 digitos ( DDD + 8 digitos) ponhe o traço no quarto digito
                    texto = [texto.slice(0, 9), "-", texto.slice(9)].join('');
            }  
                // Não adianta digitar mais digitos!
            if (texto.length > 15)               
                texto = texto.substr(0,15);
        }
        // Retorna o texto
        $(this).val(texto);    
    })   
    
    
    
//    $("#teste").click(function(){
//
//	// Define a página que vai ser aberta, quando usuario clickar.
//
//	var pagina = "app/controller/cliente/procGetCliente.php";
//
//		$("#conteudo").load(pagina);	
//
//		
//
//	});
    
    
    
      
//FIM da função PAI    
});

