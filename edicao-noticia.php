<?php 
  require_once('conexaoBanco.php');

  $noticia_id = filter_input(INPUT_GET, "noticia_id", FILTER_SANITIZE_NUMBER_INT);

  $consulta_sql = 
    "SELECT
       noticia_id,
       noticia_titulo,
       noticia_assunto
      FROM
        tb_noticia
      WHERE 
        noticia_id = '".$noticia_id."'";

      $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

      $registro = mysqli_fetch_array($resultado_consulta_sql);
      
      //fechando conexao
      mysqli_close($conexao);
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/css/Inicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
    <title>Cadastros | Noticias</title>
    <link rel="icon" href="./Public/Images/Logo-titulo.png" type="image/x-icon" />
  </head>
  <body>
    <header>
      <div  id="header" class="container-fluid fixed-top bg-light">
        <div class="row">
          <div class="col-lg-2 col-md col-3 bg-light">
            <a href="Index.html"><img src="./Public/Images/Logotipo-d.png" class="rounded float-left" alt="..."></a>
          </div>
        </div>
      </div>
    </header>
    <div class="container-fluid cima"></div>
    <main class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <img src="/Public/Images/ft-minha.jpg" alt="..." class=" ft-user img-thumbnail rounded-circle">
                    <label class="">Viniciu Cristian</label>
                </div>
            </div>
            <form class="" name="editar-noticias" action="update-noticia.php" method="POST" enctype="multipart/form-data">
                <div class="mr-4 ml-4 row">
                    <div class="col-lg-12 mt-3">
                    <input type="hidden" name="noticia_id" value="<?php echo $registro['noticia_id']; ?>">
                        <div>
                            <input type="text" name="noticia_titulo" id="titulo" value="<?php echo $registro['noticia_titulo'];?>" class="form-control" placeholder="Titulo">
                        </div>
                    </div>
                </div>
                <div class="mr-4 ml-4 row">
                    <div class="col-lg-12">
                        <div>
                            <input type="text" name="noticia_assunto" id="assunto" value="<?php echo $registro['noticia_assunto'];?>" class="form-control cima text-center" placeholder="Assunto">
                        </div>
                    </div>
                </div>
                <div class="mr-4 ml-4 row">
                    <div class="col-lg-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile"  data-browse="Proucurar">Selecionar Arquivo</label>
                        </div>
                    </div>
                </div>
                <div class="mr-4 ml-4 mt-3 row">
                    <div class="col-lg-12">
                      <input type="submit" name="salvar" value="Salvar" class="btn btn-primary mb-3" onclick="return confirm('Deseja Salavar?');">
                    </div>
                </div>
            </form>
          </div>
    </main>
    <footer class="container-fluid footer-fim bg-light">
      <div class="row">
        <div class="col-lg">Todos Direitos reservados</div>
        <div class="col-lg text-right">Create for Viniciu cristian</div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>