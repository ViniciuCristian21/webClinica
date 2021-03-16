<?php
If(!isset($_SESSION)){
  session_start();
}
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
                    <img src="<?php echo $img = "./Public/Images/ft-minha.jpg" ?>" alt="..." class=" ft-user img-thumbnail rounded-circle">
                    <label class=""><?php echo $user = $_SESSION ['usuario_nome'] ?></label>
                </div>
            </div>
            <form class="" name="cadastro-noticia" action="insert-noticia.php" method="POST" enctype="multipart/form-data">
                <div class="mr-4 ml-4 row">
                    <div class="col-lg-12 mt-3">
                        <div>
                            <input type="text" name="noticia_titulo" id="titulo" value="" class="form-control" placeholder="Titulo">
                        </div>
                    </div>
                </div>
                <div class="mr-4 ml-4 row">
                    <div class="col-lg-12">
                        <div>
                            <input type="text" name="noticia_assunto" id="assunto" value="" class="form-control cima text-center" placeholder="Assunto">
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
    <footer class="fix-footer text-muted">
      <div class="container-fluid">
        <div class="text-center">
          <p class="mt-3">TODOS DIREITOS RESERVADOS | 2021</p>
          <P>CREATE BY VINICIU CRISTIAN</P>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>