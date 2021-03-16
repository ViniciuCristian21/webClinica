<?php
    //pegar os dados transmitido por POST
    $usuario_id = filter_input(INPUT_POST, "usuario_id", FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, "usuario_nome", FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, "usuario_cpf", FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, "usuario_senha", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "usuario_email", FILTER_SANITIZE_EMAIL);
    $tipo = filter_input(INPUT_POST, "usuario_tipo", FILTER_SANITIZE_STRING);


    // importar conexao
    require_once('conexaoBanco.php');

    //realizar cadastro no banco 
    $consulta_sql = 
        "UPDATE
            tb_usuario
        SET
            `usuario_nome` = '".$nome."',
            `usuario_cpf` = '".$cpf."',
            `usuario_senha` = '".$senha."',
            `usuario_email` =  '".$email."',
            `usuario_tipo` = '".$tipo."' 
        WHERE 
            usuario_id= '".$usuario_id."' ";

    // Executar o comando SQL
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);
    
    // Fechar conexao com o banco
    mysqli_close($conexao);

    //redirecionar para pagina
    header("location: vizualisar-usuarios.php");

?>