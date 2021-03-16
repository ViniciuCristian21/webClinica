<?php 
  require_once('conexaoBanco.php');

  $usuario_id = filter_input(INPUT_GET, "usuario_id", FILTER_SANITIZE_NUMBER_INT);

  $consulta_sql = 
    "SELECT
       usuario_id,
       usuario_nome,
       usuario_cpf,
       usuario_senha,
       usuario_email,
       usuario_tipo
      FROM
        tb_usuario
      WHERE 
        usuario_id = '".$usuario_id."'";

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
    <title>Editar | Usuarios</title>
    <link rel="icon" href="./Public/Images/Logo-titulo.png" type="image/x-icon" />
  </head>
  <body>
    <header>
      <div  id="header" class="container-fluid fixed-top bg-light">
        <div class="row">
          <div class="col-lg-2 col-md col-3">
            <a href="Index.html"><img src="./Public/Images/Logotipo-d.png" class="rounded float-left" alt="..."></a>
          </div>
        </div>
      </div>
    </header>
    <div class="container-fluid cima"></div>
    <main class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col border border-dark rounded">
                    <h5 class="mt-3">Editar usuarios</h5>
                    <form class="" name="formulario-editar" action="update-usuarios.php" method="POST" enctype="multipart/form-data">
                      <div class="mt-4">
                        <div class="form-row">
                          <input type="hidden" name="usuario_id" value="<?php echo $registro['usuario_id']; ?>">
                          <div class="col">
                            <p class="m-0">Nome</p> 
                            <input type="text" class="form-control" placeholder="Nome e sobrenome" name="usuario_nome" value="<?php echo $registro['usuario_nome'];?>">
                          </div>
                          <div class="col">
                            <p class="m-0">CPF</p> 
                            <input type="text" class="form-control" placeholder="Ex: 000000000-00" name="usuario_cpf" value="<?php echo $registro['usuario_cpf']; ?>">
                          </div>
                        </div>
                      </div>
                      <div>                          
                        <div class="form-row">
                          <div class="col">
                            <p class="m-0">Senha</p> 
                            <input type="password" class="form-control" placeholder="Ex: 1234" name="usuario_senha" value="<?php echo $registro['usuario_senha']; ?>">
                          </div>
                          <div class="col">
                            <p class="m-0">Confirmar Senha</p> 
                            <input type="password" class="form-control" placeholder="Ex: 1234">
                          </div>  
                      </div>
                        <div class="form-row">
                          <div class="col">
                            <p class="m-0">Email</p> 
                            <input type="email" class="form-control" placeholder="Ex: Exemplo@hotmail.com" name="usuario_email" value="<?php echo $registro['usuario_email']; ?>">
                          </div>
                          <div class="col">
                            <p class="m-0">Confirmar Senha</p> 
                            <select class="form-select form-control" aria-label="Default select example">
                              <option selected name="usuario_tipo" value=""><?php echo $registro['usuario_tipo'];?></option>
                              <option name="usuario_tipo" value="Administrador">Administrador</option>
                              <option name="usuario_tipo" value="Editor">Editor</option>
                              <option name="usuario_tipo" value="Convidado">Convidado</option>
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
                          <div class="col-3">
                            <input type="submit" name="salvar" value="salvar" class="btn btn-primary mb-3" onclick="return confirm('Deseja Salavar?');">
                          </div>
                          <div class="col-2">
                            <button type="button" class="btn btn-warning">Alterar</button>
                          </div>
                          <div class="col-2 ml-4">
                            <button type="button" class="btn btn-danger">Excluir</button>
                          </div>
                      </div>
                    </form>
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