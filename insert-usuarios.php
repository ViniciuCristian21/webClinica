<?php
    //pegar os dados transmitido por POST
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $tipo = filter_input(INPUT_POST, "tipo", FILTER_SANITIZE_STRING);


    // importar conexao
    require_once('conexaoBanco.php');

    //realizar cadastro no banco 
    $consulta_sql = 
        "INSERT INTO 
            tb_usuario(
                `usuario_nome`,
                `usuario_cpf`,
                `usuario_senha`,
                `usuario_email`,
                `usuario_tipo`
            ) 
        VALUES(
            '".$nome."',
            '".$cpf."',
            '".$senha."',
            '".$email."',
            '".$tipo."'
        )";

    // Executar o comando SQL
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);
    
    // Fechar conexao com o banco
    mysqli_close($conexao);

    //redirecionar para pagina
    header("location: vizualisar-usuarios.php");
?>