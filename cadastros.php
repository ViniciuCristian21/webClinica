<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/css/Inicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
    <title>Cadastros</title>
    <link rel="icon" href="./Public/Images/Logo-titulo.png" type="image/x-icon" />
  </head>
  <body>
    <header>
      <div  id="header" class="container-fluid fixed-top bg-light">
        <div class="row">
          <div class="col-lg-2 col-md col-3">
            <a href="Index.php"><img src="./Public/Images/Logotipo-d.png" class="rounded float-left" alt="..."></a>
          </div>
        </div>
      </div>
    </header>
    <div class="container-fluid cima"></div>
    <main class="container-fluid">
        <div class="container">
            <h2 class="mb-3">Cadastro de usuarios</h2>
            <div class="row">
                <div class="col">
                    <div class="mt-4">
                        <form class="" name="formulario-cadastro" action="insert-usuarios.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="col">
                                <p class="m-0">Nome</p> 
                                <input type="text" name="nome" id="usuario_nome" value="" class="form-control">
                              </div>
                              <div class="col">
                                <p class="m-0">CPF</p> 
                                <input type="text" name="cpf" id="usuario_cpf" value="" class="form-control" >
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col">
                                <p class="m-0">Senha</p> 
                                <input type="password" name="senha" id="usuario_senha" value="" class="form-control">
                              </div>
                              <div class="col">
                                <p class="m-0">Confirmar Senha</p> 
                                <input type="password" name="conf_senha" id="usuario_conf_senha" value="" class="form-control">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col">
                                <p class="m-0">Email</p> 
                                <input type="email" name="email" id="usuario_email" value="" class="form-control">
                              </div>
                              <div class="col">
                                <p class="m-0">Selecionar Tipo</p> 
                                <select class="form-select form-control" aria-label="Default select example" name="tipo" id="usuario_tipo" value="">
                                  <option selected class="disabled">Selecione o Tipo</option>
                                  <option value="Administrador">Administrador</option>
                                  <option value="Editor">Editor</option>
                                  <option value="Convidado">Convidado</option>
                                </select>
                              </div>
                            </div>
                            <div class="mt-4">
                              <p class="p-0">Foto(Sua Foto)</p>
                              <div class="input-group mb-3 mt-3">
                                <div class="custom-file"> 
                                  <input type="file" class="custom-file-input" id="inputGroupFile02">
                                  <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02" data-browse="Procurar">Selecionar Arquivo</label>
                                </div>
                                <div class="input-group-append">
                                  <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                                </div>
                              </div>
                            </div>
                            <div class=" row mt-4">
                              <div class="col-2">
                                <input type="submit" name="salvar" value="salvar" class="btn btn-primary mb-3" onclick="return confirm('Deseja Salavar?');">
                              </div>
                              <div class="col-2">
                                <a href="./vizualisar-usuarios.php" class="btn btn-warning text-light mb-3">Listar</a>
                              </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="container-fluid"></div>
    <footer class="container-fluid footer-fim bg-light">
      <div class="row">
        <div class="col-lg text-center">
          <p class="mt-3">TODOS DIREITOS RESERVADOS | 2021</p>
          <P>CREATE BY VINICIU CRISTIAN</P>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>