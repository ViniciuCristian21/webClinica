<?php
    //pegar os dados transmitido por POST
    $noticia_titulo = filter_input(INPUT_POST, "noticia_titulo", FILTER_SANITIZE_STRING);
    $noticia_assunto = filter_input(INPUT_POST, "noticia_assunto", FILTER_SANITIZE_STRING);

    $date = date_create();
    $noticia_data = date_format($date, 'Y-m-d H:i:s');

    // importar conexao
    require_once('conexaoBanco.php');

    //realizar cadastro no banco 
    $consulta_sql = 
        "INSERT INTO 
            tb_noticia(
                `noticia_titulo`,
                `noticia_assunto`,
                `noticia_data`
            ) 
        VALUES(
            '".$noticia_titulo."',
            '".$noticia_assunto."',
            '".$noticia_data."'
        )";

    // Executar o comando SQL
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);
    
    // Fechar conexao com o banco
    mysqli_close($conexao);

    //redirecionar para pagina
    header("location: editar-noticias.php");
?>