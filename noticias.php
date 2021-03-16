<?php
  require_once('conexaoBanco.php');

  $consulta_sql = 
    "SELECT
       noticia_id,
       noticia_titulo,
       noticia_assunto,
       noticia_data
      FROM
        tb_noticia";

      $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

      // $registro = mysqli_fetch_array($resultado_consulta_sql);
      
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
    <title>Entrar</title>
    <link rel="icon" href="./Public/Images/Logo-titulo.png" type="image/x-icon" />
  </head>
  <body>
    <header>
      <div  id="header" class="container-fluid bg-light">
        <div class="row">
          <div class="col-lg-2 col-md col-3 bg-light">
            <a href="Index.php"><img src="./Public/Images/Logotipo-d.png" class="rounded float-left" alt="..."></a>
          </div>
          <div class="col-lg bg-light">
            
          </div>
        </div>
      </div>
    </header>
    <div class="container-fluid border border-light">
        <div class=" container mb-5 mt-4">
            <div class="row">
                <div class="col-lg">
                    <h2>Notícias</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container fluid">
        <!-- Lina1 -->
        <?php
        while($registro = mysqli_fetch_array($resultado_consulta_sql, MYSQLI_BOTH)){ ?>
        <div class="row">
            <div class="col-md-1 col-lg-12 mt-4">
                <div class="card-deck">
                    <div class="card">
                      <img src="Public/Images/noticia1.jpg" class="card-img-top" alt="Noticia">
                      <div class="card-body">
                        <span><img src="Public/Images/ft-minha.jpg" class="float-right ft-user-noticia rounded-circle" alt="Noticia"><p class="p-0 m-0 mt-2 mr-2 float-right">Usuario</p></span>
                        <h5 class="card-title"><?php echo $registro['noticia_titulo'];?></h5>
                        <p class="card-text"><?php echo $registro['noticia_assunto'];?></p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted"><?php echo $registro['noticia_data'];?></small>
                      </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <footer class="container-fluid bg-light mt-3">
      <div class="row">
        <div class="col-lg">
          <div class="text-right "> <a href="#"> voltar para o topo</a></div>
          <div class="text-center">
            <p class="mt-3">TODOS DIREITOS RESERVADOS | 2021</p>
            <P>CREATE BY VINICIU CRISTIAN</P>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>