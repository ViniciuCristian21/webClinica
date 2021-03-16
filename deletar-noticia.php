<?php
    $noticia_id = filter_input(INPUT_GET, "noticia_id", FILTER_SANITIZE_NUMBER_INT);

    //uimportat conexao com o banco
    require_once('conexaoBanco.php');

    //ralizar conexao com o banco 
    $consulta_sql = 
        "DELETE FROM
            tb_noticia
        WHERE
            noticia_id = '".$noticia_id."';

    ";
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

    //fechando conexao
    mysqli_close($conexao);

    //redirecionar para pagina
    header("location: editar-noticias.php");
?>