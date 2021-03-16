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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/css/Inicio.css">

    <title>Home | Clinica Medica</title>
    <link rel="icon" href="./Public/Images/Logo-titulo.png" type="image/x-icon" />
  </head>
  <body>
      <header>
        <div  id="header" class="container-fluid fixed-top">
          <div class="row bg-light">
            <div class="col">
              <a href="Index.php"><img src="./Public/Images/Logotipo-d.png" class="rounded float-left img-fluid" alt="..."></a>
              <div class="col">
                <button class=" img-menu  float-right justify-content-end mt-3 bg-transparent rounded"><img src="<?php echo "./Public/Images/favicon32.png" ?>" alt="Menu" class="bg-transparent"></button>
              </div>
            </div>
          </div>
          <div class="row bg-light border-top border-white">
            <div class="container">
              <div class="col-lg">
                <nav class="navbar navbar-light justify-content-end ">
                  <ul class="nav resp-nav font-weight-bold">
                    <li class="nav-item">
                      <a class="nav-link active" href="#sobre-nos">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#especialidades">Especialidaes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#exames">Exames</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#agendamento" >Agendamento</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#galeria" >Galeria</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="noticias.php" >Noticias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?php echo !empty($_SESSION) ? "" : "disabled"; ?>" href="administrativo.php">Administrativo</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contato" >Contato</a>
                    </li>
                    <li class="nav-item"> 
                      <a class="nav-link bg- <?php echo !empty($_SESSION) ? "disabled" : ""; ?>" href="entrar.php" >Entrar</a>
                    </li>
                    <li class="nav-item <?php echo !empty($_SESSION) ? "" : "invisible"; ?>"> 
                      <a class="nav-link bg-" onclick="return confirm('Deseja Sair?');" href="sair.php?sair=true">Sair</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <span class="flecha-topo"> <a href="#espaco" ><img src="<?php echo "./Public/Images/flecha-cima.png" ?>" alt="ir-para-o-topo"></a></span>
          </div>
        </div>
      </header>
      <div id="espaco" class="container-fluid"></div>
      <main>
        <!-- Inicio -->
        <div id="slide-home " class="row">
          <div class="col-lg">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./Public/Images/slide-clinica-1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./Public/Images/slide-clinica-1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./Public/Images/slide-clinica-1.png" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <sapan id="sobre-nos"></sapan>  
        <!--Sobre Nós -->
        <div  class="row mt-4 border-bottom border-light">
          <div class="col-lg text-center">
            <h4>Informações Sobre a Clinica</h4>
            <p>Left aligned text on viewports sized XL (extra-large) or wider.</p>
          </div>
          <div class="col-lg-5 text-center">
            <h5>Horario de funcionamento</h5>
            <p>Left aligned text on viewports sized XL (extra-large) or wider.</p>
          </div>
        </div>
        <!--Nossa Equipe -->
        <div id="nossa-equipe" class="container-fluid border-bottom border-light bg-light">
          <div  class="container mt-4 mb-3">
            <div><h3>Equipe</h3></div>
            <div class="row">
              <div class="col-md-4 text-center">
                <img src="<?php echo "./Public/Images/Temp.jpg" ?>" class="img-equipe rounded-circle rounded mx-auto d-block" alt="...">
                <span> Nome do medico</span> 
              </div>
              <div class="col-md-4 text-center">
                <img src="<?php echo "./Public/Images/Temp.jpg" ?>" class="img-equipe rounded-circle rounded mx-auto d-block" alt="...">
                <span> Nome do medico</span> 
              </div>
              <div class="col-md-4 text-center">
                <img src="<?php echo "./Public/Images/Temp.jpg" ?>" class="img-equipe rounded-circle rounded mx-auto d-block" alt="...">
                <span> Nome do medico</span> 
              </div>
            </div>
          </div> 
        </div>
        <!--convenio -->
        <div class="container-fluid border-bottom border-light">
          <div id="convenio" class="container mt-5 mb-3">
            <div class=""><h3>Convenios</h3></div>
            <div class="row">
              <div class="col-md-6 col-sm-1 mb-2"> 
                <img src="<?php echo "./Public/Images/sobre-nos-2.jpeg" ?>" class="rounded mx-auto d-block" >
              </div>
              <div class="col-md-6 col-sm-1"> 
                <img src="Public/Images/sobre-nos-2.jpeg" class="rounded mx-auto d-block" >
              </div>
            </div>
          </div>
        </div>
        <!--Especialidades-->
        <div id="especialidades" class="container mt-4">
          <div class="container-fluid text-center"><h3>Especialidades</h3></div>
          <div class="row mt-4">
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/Nutricionista.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Nutricionista</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/geral.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Clinico Geral</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/dermatologia.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Dermatologia</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
          <!--Linha 2-->
          <div class="row mt-4">
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/Nutricionista.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/geral.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/dermatologia.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
          <!--Linha 3-->
          <div class="row mt-4">
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/Nutricionista.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/geral.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/dermatologia.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Exames-->
        <div id="exames" class="container mt-5">
          <div class="container-fluid text-center"><h3>Exames</h3></div>
          <div class="row">
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/exames1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/exames2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="Public/Images/exames3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
          <!--Linha 2-->
          <div class="row mt-5">
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/exames1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/exames2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="Public/Images/exames3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Agendamento-->
        <div id="agendamento" class="container mt-5">
          <div class="row">
            <div class="col-md-4 bg-primary">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</br> 
              when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
              typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</br> 
              and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div class="col-md border border-dark">
              <div class="text-center mb-2 mt-2"><h5>Agendamento</h5></div>
              <div class="container-fluid">
                <form>
                  <div class="row">
                    <div class="col">
                      <select class="form-control">
                        <option>Selecione a Area</option>
                        <option>Cardiologia</option>
                        <option>Urologia</option>
                        <option>Cirurgia geral</option>
                        <option>Cardiologia</option>
                      </select>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Telefone">
                    </div>
                  </div>
                </form>
              </div>
              <div class="container-fluid mt-3">
                <form>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col">
                      <input type="email" class="form-control" placeholder="E-mail">
                    </div>
                  </div>
                </form>
              </div>
              <div class="container-fluid mt-3">
                <form>
                  <div class="row">
                    <div class="col">
                      <button type="button" class="btn btn-primary">Agendar</button>
                    </div>
                    <div class="col">
                      <input type="date" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
              <div class="mt-3">
                <p>
                  1. Consultas com especialista e exame de ultrassom
                  Você pode agendar por um dos telefones do Centro Médico Campo Grande (19 – 3221-7100 ou xxxx.xxxx),
                  ou diretamente em nossa recepção (Rua Dr. Domingos Rimoli Neto, 169 – Pq. Valença – I – antiga rua 24).
                </p>
                <p>
                  2. Consultas com especialista e exame de ultrassom
                  Você pode agendar por um dos telefones do Centro Médico Campo Grande (19 – 3221-7100 ou xxxx.xxxx),
                  ou diretamente em nossa recepção (Rua Dr. Domingos Rimoli Neto, 169 – Pq. Valença – I – antiga rua 24).
                </p>
                <p>
                  3. Consultas com especialista e exame de ultrassom
                  Você pode agendar por um dos telefones do Centro Médico Campo Grande (19 – 3221-7100 ou xxxx.xxxx),
                  ou diretamente em nossa recepção (Rua Dr. Domingos Rimoli Neto, 169 – Pq. Valença – I – antiga rua 24).
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--Galeria-->
        <div id="galeria" class="container mt-4" >
          <div class="text-center"><h4>Galeria</h4></div>
          <div class="row">
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/exames1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card">
                <img class="card-img-top" src="Public/Images/exames2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="Public/Images/exames3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg mt-2">
            <div class="">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <!--Contato-->
        <div class="container-fluid m-0 p-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.22079373481!2d-46.67405788440658!3d-23.560512367447416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c9ea589f68c5%3A0x283c5e5757b29456!2sRua%20Oscar%20da%20Silva%20Amaro%20-%20Vila%20Aeroporto%2C%20Campinas%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1605557286747!5m2!1spt-BR!2sbr" width="1905" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div id="contato" class="container mt-4">
          <div class="row">
            <div class="col"><p>Contato</p></div>
            <div class="col"><p>Mapa</p></div>
            <div class="col"><p>Contate-nos</p></div>
            <div class="col-2"><p>Redes Sociais</p></div>
          </div>
          <div class="row">
            <div class="col-md mt-3 col-sm-1 border boreder-dark">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
            </div>
            <div class="col-md">
              <div class="text-center"><h4>Contate-nos</h4></div>
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Nome</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Seu nome">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Email</label>
                  <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Exemplo:email@gmail.com">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput3">Mensagem</label>
                  <textarea name="mensagem" class="form-control" id="formGroupExampleIput3" placeholder="Sua Mensagem"></textarea>
                </div>
                <div class="form-group"><button type="button" class="btn btn-primary">Enviar</button></div>
              </form>
            </div>
          </div>
        </div>
      </main>
      <!--Footer-->
      <footer>
        <div class="container-fluid bg-light mb-0">
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
            <div class="container-fluid row">
              <div class="col-lg text-center">
                <p class="mt-3">TODOS DIREITOS RESERVADOS | 2021</p>
                <P>CREATE BY VINICIU CRISTIAN</P>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>