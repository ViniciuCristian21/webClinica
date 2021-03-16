<?php
    //pegar os dados transmitido por POST
    $noticia_id = filter_input(INPUT_POST, "noticia_id", FILTER_SANITIZE_NUMBER_INT);
    $noticia_titulo = filter_input(INPUT_POST, "noticia_titulo", FILTER_SANITIZE_STRING);
    $noticia_assunto = filter_input(INPUT_POST, "noticia_assunto", FILTER_SANITIZE_STRING);


    // importar conexao
    require_once('conexaoBanco.php');

    //realizar cadastro no banco 
    $consulta_sql = 
        "UPDATE
            tb_noticia
        SET
            `noticia_titulo` = '".$noticia_titulo."',
            `noticia_assunto` = '".$noticia_assunto."'
        WHERE 
            noticia_id = '".$noticia_id."'";

    // Executar o comando SQL
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);
    
    // Fechar conexao com o banco
    mysqli_close($conexao);

    //redirecionar para pagina
    header("location: editar-noticias.php");

?>