<?php
  If(!isset($_SESSION)){
    session_start();
  }
  $bloquear = "";
  if(!isset($_SESSION['usuario_id'])){
    
    // impossibilitando de entrar na pagina administrativa por link
    echo '<meta http-equiv="refresh" content="0; URL=./index.php">';
  }
  if($_SESSION['usuario_tipo'] == "Editor"){
    $bloquear = true;
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
    <title>Administrativo</title>
    <link rel="icon" href="./Public/Images/Logo-titulo.png" type="image/x-icon" />
  </head>
  <body>
      <header>
            <div  id="header" class="container-fluid bg-light fixed-top">
              <div class="row justify-content-between">
                  <div class="col-lg-2 col-md col-3 bg-light">
                  <a href="Index.php"><img src="./Public/Images/Logotipo-d.png" class="rounded float-left" alt="..."></a>
                  </div>
                  <div class=" mt-2 font-weight-bold h5">
                    <a href="sair.php?sair=true" class="nav-link bg-" onclick="return confirm('Deseja Sair?');">Sair</a>
                  </div>
              </div>
            </div>
      </header>
      <div id="espaco" class="container-fluid"></div>
      <main>
            <div class="container-fluid mt-5 border-bottom border-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg">
                            <h3>Cadastros</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid border border-light">
                <div class="container">
                    <div class="row mt-4">
                        <!--#1 -->
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="public/images/kisspng-gear.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                  <h5 class="card-title">Cadastrar usuarios ou Imagens</h5>
                                  <p class="card-text">Aqui você pode cadastrar um usuario ou uma imagem na galeria.</p>
                                  <a href="cadastros.php" class="btn btn-primary <?php echo $bloquear == true ? "disabled" : ""; ?>">Saber mais</a>
                                </div>
                              </div>
                        </div>
                        <!--#2-->
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="public/images/kisspng-gear.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                  <h5 class="card-title">Publicar noticias</h5>
                                  <p class="card-text">Aqui você publica novidades na ala de noticias do site.</p>
                                  <a href="Cadastro-noticias.php" class="btn btn-primary">Saber mais</a>
                                </div>
                              </div>
                        </div>
                        <!--#3-->
                        <div class="col">
                              <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="public/images/kisspng-gear.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                  <h5 class="card-title">Editar ou visualizar usuarios</h5>
                                  <p class="card-text">Aqui você edita ou cadastra um usuario ja cadastrado no sistema.</p>
                                  <a href="vizualisar-usuarios.php" class="btn btn-primary <?php echo $bloquear == true ? "disabled" : ""; ?>">Saber mais</a>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="row mt-3">
                        <!-- #4 -->
                        <div class="col-4">
                          <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="public/images/kisspng-gear.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                              <h5 class="card-title">Editar ou visualizar noticias</h5>
                              <p class="card-text">Aqui você edita  uma noticia ja cadastrado no sistema.</p>
                              <a href="editar-noticias.php" class="btn btn-primary">Saber mais</a>
                            </div>
                          </div>
                        </div>
                        <!-- #5 -->
                        <div class="col">
                          <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="public/images/kisspng-gear.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                              <h5 class="card-title">Cadastrar Imagem</h5>
                              <p class="card-text">Aqui você cadastra imagens na galeria.</p>
                              <a href="cadastro-imagem.php" class="btn btn-primary">Saber mais</a>
                            </div>
                          </div>
                        </div>
                        <!-- #6 -->
                        <div class="col">
                          <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="public/images/kisspng-gear.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                              <h5 class="card-title">Cadastrar Imagem</h5>
                              <p class="card-text">Aqui você lista as imagens cadastradas</p>
                              <a href="form-galeria.php" class="btn btn-primary">Saber mais</a>
                            </div>
                          </div>
                        </div>
                      </div>
                  <div>
              </div>
      </main>
      <!--Footer-->
      <footer>
        <div class="mt-4 container-fluid bg-light mb-0">
          <div class="container" > 
            <nav class="navbar-light">
              <ul class="navbar">
                <li><a class="nav-link" href="#">Sobre nós</a></li>
                <li><a class="nav-link" href="#">Especialidades</a></li>
                <li><a class="nav-link" href="#">Exames</a></li>
                <li><a class="nav-link" href="#">Agendamento</a></li>
                <li><a class="nav-link" href="#">Galeria</a></li>
                <li><a class="nav-link" href="#">Noticias</a></li>
                <li><a class="nav-link" href="#">Contato</a></li>
              </ul>
            </nav>
            <div class="container-fluid">
              <div class="text-center">
                <p class="mt-3">TODOS DIREITOS RESERVADOS | 2021</p>
                <P>CREATE BY VINICIU CRISTIAN</P>
              </div>
            </div>
            </div>
          </div>
        </div>
      </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>