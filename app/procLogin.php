<?php ob_start();
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    //para usar o select genérico
    include ("../bd/crudGenerico.php");
    
    
    if(isset($_POST["entrar"])){		
        $login = mysql_real_escape_string($_POST['login']);
        $senha = md5(mysql_real_escape_string($_POST['senha']));
        
        //informações para mandar ao select genérico
        $tabela = "clientes";
        $campos = "nome,login,senha";  
        $condicao = " WHERE login="."'$login' AND senha="."'$senha'";
                
        //retorna dados do select
        $my = mfa(seleciona($campos,$tabela,$condicao));
        $nome = $my['nome'];
        
        if (seleciona($campos,$tabela,$condicao)){
            $_SESSION['nome'] = $nome;
            header("location: ../index.php");
        }else{
            header("location: ?erro=1");
        }
        
    }else{
        echo "erro ao logar";
//        header("location:  http://localhost/sgco/?id=5");
    }    
						
?>

