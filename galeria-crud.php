<?php
    // Iniciando sseção 
    If(!isset($_SESSION)){
    session_start();
    }

    //Verificar se houve submit no formulário
    if(!empty($_POST['salvar']) OR isset($_GET['imagem_id']) ){
        
        //Liberar o POST para não executar a operação novamente
        unset($_POST['salvar']);

        //Pegar e filtrar valores tranmitidos via GET ou POST 
        $usuario_id = $_SESSION['usuario_id'];
        isset($_GET['imagem_id']) ? 
            $imagem_id = filter_input(INPUT_GET, 'imagem_id', FILTER_SANITIZE_NUMBER_INT) : 
            $imagem_id = filter_input(INPUT_POST, 'imagem_id', FILTER_SANITIZE_NUMBER_INT);
        $imagem_titulo = filter_input(INPUT_POST, 'imagem_titulo', FILTER_SANITIZE_STRING);
        $imagem_descricao = filter_input(INPUT_POST, 'imagem_descricao', FILTER_SANITIZE_STRING);
        isset($_GET['imagem_caminho']) ? 
            $imagem_caminho = filter_input(INPUT_GET, 'imagem_caminho', FILTER_SANITIZE_STRING) : 
            $imagem_caminho = filter_input(INPUT_POST, 'imagem_caminho', FILTER_SANITIZE_STRING);

        $caminho = "public/images/galeria/";

        if($_FILES["file"]["error"] == 0){

            //Consulta a ser realizada no banco de dados 
            if(isset($_GET['imagem_id'])){
                unlink($imagem_caminho);

                $consulta_sql = 
                    "DELETE FROM 
                        tb_imagem
                    WHERE
                        imagem_id =  '$imagem_id'";

                $mensagem_sucesso = "Imagem apagada com sucesso";
            }elseif($imagem_id != ""){
                if(isset($_FILES['file'])){
                    unlink($imagem_caminho);
                    require_once('galeria-up.php');
                    $imagem_caminho = ", imagem_caminho = '$arquivo_caminho',";
                    $imagem_tipo = "imagem_tipo = '$arquivo_tipo',";
                    $imagem_tamanho = "imagem_tamanho = '$arquivo_tamanho'";
                    
                    
                }

                $consulta_sql =
                    "UPDATE 
                        tb_imagem
                    SET 
                        usuario_id = '$usuario_id',
                        imagem_titulo = '$imagem_titulo', 
                        imagem_descricao = '$imagem_descricao'
                        $imagem_caminho
                        $imagem_tipo
                        $imagem_tamanho
                    WHERE 
                        imagem_id = '$imagem_id'";

                $mensagem_sucesso = "Imagem editada com sucesso";
            }else{
                require_once('galeria-up.php');
                $consulta_sql = 
                    "INSERT INTO
                       tb_imagem
                        (usuario_id,
                        imagem_titulo,
                        imagem_descricao,
                        imagem_caminho,
                        imagem_tipo,
                        imagem_tamanho
                    )
                    VALUES
                        ('$usuario_id',
                        '$imagem_titulo',
                        '$imagem_descricao',
                        '$arquivo_caminho',
                        '$arquivo_tipo',
                        '$arquivo_tamanho'
                    )";
                        

                $mensagem_sucesso = "Imagem inserida com sucesso";
            }
            //Importar conexao com banco de dados
            require_once('conexaoBanco.php');

            //Realizar operação no banco de dados
            $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

            //Coletar erro de SQL Query ou mover o arquivo para o destino
            mysqli_error($conexao) ? $mensagem_erro = mysqli_error($conexao) : move_uploaded_file($arquivo, $arquivo_caminho); 
        }else{

            //Coletar erro de upload de arquivo
            $mensagem_erro = "Upload falhou. Código de erro: " . $_FILES["file"]["error"];
        }
        
        //Verificar se a operação foi realizada e retornar mensagem utilizando sessão    
        if(mysqli_affected_rows($conexao) > 0){
            $_SESSION['mensagem'] = "<span class='text-success'>$mensagem_sucesso</span>";
        }elseif($mensagem_erro == ""){
            $_SESSION['mensagem'] = "";
        }else{
            $_SESSION['mensagem'] = "<span class='text-danger'>Algo deu errado! $mensagem_erro</span>";
        }

        //Fechar conexão com o banco de dados
        mysqli_close($conexao);
        
        //Redirecionar para outra página
        header("Location: form-galeria.php");
    }
?>