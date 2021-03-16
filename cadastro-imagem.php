<?php 
// Iniciando sseção 
  If(!isset($_SESSION)){
    session_start();
  }
  // Pegar e filtrar valores transmitidos via GET 
  $imagem_id = filter_input(INPUT_GET, 'imagem_id', FILTER_SANITIZE_NUMBER_INT);

  if(isset($imagem_id)){

    // consulta a ser realizada no banco

    $consulta_sql = 
      "SELECT
        imagem_titulo,
        imagem_descricao,
        imagem_caminho
      FROM
        tb_imagem
      WHERE
        imagem_id = '$imagem_id'";
      
    require_once('conexaoBanco.php');

    $resultado_sonsulta_sql = mysqli_query($conexao, $consulta_sql);

    $registro = mysqli_fetch_array($resultado_sonsulta_sql, MYSQLI_BOTH);

    mysqli_close($conexao);
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Imagens</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/css/Inicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div id="header" class="container-fluid bg-light">
            <div class="row">
              <div class="col-lg-2 col-md col-3">
                <a href="Index.php"><img src="./Public/Images/Logotipo-d.png" class="rounded float-left" alt="..."></a>
              </div>
            </div>
          </div>
    </header>
    <main class="container mt-4">
        <section class="border-bottom boreder-dark ">
          <h1 class="display-4"><?php echo isset($imagem_id) ? "Editar Imagem" : "Cadastrar Imagem" ; ?></h1>
        </section>
        <!--Cadastro de Imagem-->
        <div class="col border-top  border border-dark rounded mt-4">
          <h5 class="mt-3">Cadastrar na galeria</h5>
          <form name="cad_img" action="galeria-crud.php" method="POST" enctype="multipart/form-data" onreset="habilitar();">
            <div>
                <!-- picture para a imgem que esta sendo editada -->
                <div class="p-0 m-0" style="max-width: 200px; max-heigth: 200px;">
                  <img class="p-0 m-0" name="imagem" id="imagem" src="<?php echo isset($imagem_id) ? $registro['imagem_caminho'] : 'public/images/no-image.jpg' ?>" alt="Imagem da galeria">
                </div>
                <!-- Input ID da imagem -->
                <input type="hidden" name="imagem_id" value="<?php echo isset($imagem_id) ? $imagem_id : "" ?>">
              <!-- titulo da imagem -->
              <div class="mt-3">
                  <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" id="titulo" name="imagem_titulo" value="<?php echo isset($imagem_id) ? $registro['imagem_titulo'] : "" ?>" placeholder="Titulo">
                    </div>
                  </div>
              </div>
              <!-- descriçao da imagem -->
              <div class="mt-3">
                  <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" id="descricao" name="imagem_descricao" value="<?php echo isset($imagem_id) ? $registro['imagem_descricao'] : "" ?>" placeholder="Descrição">
                    </div>
                  </div>
              </div>
              <!-- Iput type file  -->
              <div class="input-group mb-3 mt-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" name="imagem_caminho" id="imagem_caminho" onClick="habilitar();" value="<?php echo isset($imagem_id) ? $registro['imagem_caminho'] : "" ?>" <?php echo isset($imagem_id) ? "" : "checked" ?>>
                    </div>
                </div>
                <div class="custom-file">              
                    <input type="file" class="custom-file-input" name="file" id="file" onchange="verImagem();" data-max-file-size="2048" <?php echo isset($imagem_id) ? "disabled" : "" ?>>
                    <label data-browse="Buscar" class="custom-file-label" name="name" id="name"></label>
                </div>  
            </div>
                <!--Botao salvar -->
                <div class=" row mt-4 mb-2">
                  <div class="col-3">
                  <input type="submit" name="salvar" value="Salvar" class="btn btn-primary border-secondary botoes-form-dimensoes" onclick="return confirm('Deseja salvar?');">
                  </div>
                </div>
            </div>
          </form>
        </div>
    </main>
    <footer>
        <div class="row">
            <div class="col-lg text-center ">
              <p class="mt-3">TODOS DIREITOS RESERVADOS | 2021</p>
              <P>CREATE BY VINICIU CRISTIAN</P>
            </div>
          </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script para imagem -->
    <script type="text/javascript">
      var inputFile = document.getElementById("file");
          inputFile.addEventListener("change", function(){
              document.getElementById("name").innerHTML = this.files[0].name;
          }); 

      function verImagem(){ 
          var oFReader = new FileReader(); 
          oFReader.readAsDataURL(document.getElementById("file").files[0]);

          oFReader.onload = function (oFREvent){ 
              document.getElementById("imagem").src = oFREvent.target.result;
          };
      };

      function habilitar(){
          if(document.getElementById('imagem_caminho').checked){
              document.getElementById('file').disabled = false;
          }else{
              document.getElementById('file').disabled = true;
              document.getElementById("imagem").src = "<?php echo isset($imagem_id) ? $registro['imagem_caminho'] : 'public/images/no-image.jpg' ?>";      
              document.getElementById("name").innerHTML = "";
          }
      };
    </script>
</body>
</html>