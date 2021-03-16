<?php 
    $sair = filter_input(INPUT_GET, 'sair', FILTER_VALIDATE_BOOLEAN);

    // Fazer logout(sair)
    if($sair == true){
        if(!isset($_SESSION)){
            session_start();
        }
        //Limpar as variaveis da sessão
        session_unset();

        // Finalizar sessão 
        session_destroy();

        // Fecahr todas as sessões
        session_write_close();

        // Limpar os cookies da sessão no servidor
        setcookie(session_name(),'',0,'/');

        // Exibir uma menssagem de conslusao
        echo "<script>alert('Você saiu com sucesso.');</script>";

        if($sair == true){
            echo '<meta http-equiv="refresh" content="0; URL=./index.php">';
        }
    }
?>