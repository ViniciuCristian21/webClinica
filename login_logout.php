<?php 
    // filtrar e pegar os dados
    $usuario_email = filter_input(INPUT_POST, 'usuario_email', FILTER_SANITIZE_STRING);
    $usuario_senha = filter_input(INPUT_POST, 'usuario_senha', FILTER_SANITIZE_STRING);

    //Verifica se hove submit no formulario
    if(!empty($_POST['entrar'])){
        //liberar o POST para nao executar a operação novamente
        unset($_POST['entrar']);
        //Verificar se o usuario ou a senha estao vazios
        if(empty($usuario_email) or empty($usuario_senha)){
            //mensagem de erro quando os dados nao foram digitado pelo usuario e retornar para pagina anterior 
            echo"<script>alert('Os dados nao foram informados para entrar!.'); history.go(-1);</script>";
            //Finalizar execuçao do script 
            exit;
        }


    }

    //consulta a ser realaizada no banco de dados
    $consulta_sql = 
        "SELECT
            usuario_id,
            usuario_nome,
            usuario_email,
            usuario_senha,
            usuario_tipo
        FROM
            tb_usuario
        WHERE
            usuario_email = '$usuario_email'
        AND
            usuario_senha = '$usuario_senha'
        LIMIT 1";

    require_once('conexaoBanco.php');


    //Realizar operaçao no banco de dados
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

    //Validar o usuario e senha digitados
    if(mysqli_num_rows($resultado_consulta_sql) != 1){
        echo"<script>alert('E-mail ou senha ivalidos.'); history.go(-1);</script>"; 
        //finalizar execuçao do script 
        exit;
    }else{
        //Salvar inforacoes na variavel registro
        $registro = mysqli_fetch_array($resultado_consulta_sql);

        //se a sessão nao existir, iniciar uma 
        if(!isset($_SESSION)){
            //Iniciar uma sessao
            session_start();
        }

        //salvar as informaçoes do banco de dados na sessão
        $_SESSION['usuario_id'] = $registro['usuario_id'];
        $_SESSION['usuario_nome'] = $registro['usuario_nome'];
        $_SESSION['usuario_email'] = $registro['usuario_email'];
        $_SESSION['usuario_tipo'] = $registro['usuario_tipo'];

        //redirecionar para outra pagina 
        header("Location: administrativo.php");

        //finalizar execuçao do script 
        exit;
    }  
?>
