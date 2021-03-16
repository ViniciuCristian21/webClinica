<?php
    //parametros paar conectar com o banco
    $nome_servidor = "localhost";
    $nome_usuario = "viniciu";
    $senha_usuario = "1234";
    $banco_dados = "db_webclinica";

    $conexao = mysqli_connect($nome_servidor, $nome_usuario, $senha_usuario, $banco_dados);

    //verificar conexao com o  banco de dados

    if(mysqli_connect_errno()){
        printf("Falha na conexão com o banco de dados: %s\n", mysqli_connect_error());
        exit();
    }

?>