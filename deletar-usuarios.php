<?php
    $usuario_id = filter_input(INPUT_GET, "usuario_id", FILTER_SANITIZE_NUMBER_INT);

    //uimportat conexao com o banco
    require_once('conexaoBanco.php');

    //ralizar conexao com o banco 
    $consulta_sql = 
        "DELETE FROM
            tb_usuario
        WHERE
            usuario_id = '".$usuario_id."';

    ";
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

    //fechando conexao
    mysqli_close($conexao);

    //redirecionar para pagina
    header("location: vizualisar-usuarios.php");
?>