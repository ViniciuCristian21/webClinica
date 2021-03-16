<?php
  If(!isset($_SESSION)){
    session_start();
  }
  require_once('conexaoBanco.php');

  //Consulta a Ser Realizada no banco de dados
  $consulta_sql = 
    "SELECT 
      imagem_id
     FROM
      tb_imagem";

  //realizar operação no banco de dados
  $resultado_consulta_slq = mysqli_query($conexao, $consulta_sql);

  //contando o numero de linhas retornadas
  $quantia_total_registro_banco = mysqli_num_rows($resultado_consulta_slq);

  //definir a quantidade de registros por pagina
  $quantidade_registros_por_pagina = 3;

  //definir o total de registros por pagina
  $quantidade_paginas = ceil($quantia_total_registro_banco / $quantidade_registros_por_pagina);

  //verificar qual e a pagina atual 
  $pagina_atual = isset($_GET['pagina_atual']) ? filter_input(INPUT_GET,'pagina_atual',FILTER_SANITIZE_NUMBER_INT) : 1;

  //definir inicio da nova consulta no banco de dados conforme pagina atual
  $inicio_consulta = ($quantidade_registros_por_pagina * $pagina_atual) - $quantidade_registros_por_pagina;

  //consulta a ser realizada no banco de dados para exibir os dados
  $consulta_sql_final =  
      "SELECT 
      imagem_id, 
      LEFT(imagem_titulo, 15) AS imagem_titulo, 
      LEFT(imagem_descricao, 15) AS imagem_descricao,
      LEFT(imagem_tipo, 10) AS imagem_tipo, 
      LEFT(imagem_tamanho, 10) AS imagem_tamanho,  
      LEFT(usuario_nome, 13) AS usuario_nome,
      LEFT(imagem_caminho, 30) AS caminho_abreviado
    FROM 
      tb_imagem
    INNER JOIN 
      tb_usuario 
    USING 
      (usuario_id) 
    ORDER BY 
      imagem_id ASC 
    LIMIT 
      $inicio_consulta, 
      $quantidade_registros_por_pagina";

  //executar consulta final
  $resultado_consulta_slq = mysqli_query($conexao, $consulta_sql_final);

  //contanto total de linhas que voltou na consulta com a limitaçao atual
  $quantia_total_registro = mysqli_num_rows($resultado_consulta_slq);


  //fechar conexao no banco de dados
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
    <title>Listar imagem</title>
    <link rel="icon" href="./Public/Images/Logo-titulo.png" type="image/x-icon" />
  </head>
  <body>
    <header>
      <div  id="header" class="container-fluid bg-light">
        <div class="row">
          <div class="col-lg-2 col-md col-3 bg-light">
            <a href="Index.php"><img src="./Public/Images/Logotipo-d.png" class="rounded float-left" alt="..."></a>
          </div>
        </div>
      </div>
    </header>
    <main class="container-fluid">
        <div class="container mt-5">
          <div class="row">
          <h3>Listagem de Images</h3>
          </div>
            <div class="row">
              <div class="mr-2"><?php echo $mensagem = isset($_SESSION['mensagem']) ? $_SESSION['mensagem'] : "";?></div>
            </div>
        </div>
        <div class="container mt-5 table-responsive-lg">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">Editar</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Tamanho</th>
                    <th scope="col">Por</th>
                    <th scope="col">Caminho</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  //Mostrar registros enquanto houver
                  while ($registro = mysqli_fetch_array($resultado_consulta_slq, MYSQLI_BOTH)){ ?>
                  <tr>
                    <td>
                        <a class="btn btn-sm btn-primary" style="width: 65px;" 
                        href="cadastro-imagem.php?imagem_id=<?php echo $registro['imagem_id']; ?>" >Editar<a>

                        <a class="btn btn-sm btn-primary" style="width: 65px;" onclick="return confirm('Deseja Apagar?');"
                         href="galeria-crud.php?imagem_id=<?php echo $registro['imagem_id']; ?>&imagem_caminho=<?php echo $registro['caminho_abreviado']; ?>">Apagar</a>
                    </td>
                    <td class="d-none" style=""><?php echo $registro['imagem_id']; ?></td>
                    <td class="pt-3" style=""><?php echo $registro['imagem_titulo']; ?></td>
                    <td class="pt-3" style=""><?php echo $registro['imagem_descricao']; ?></td>
                    <td class="pt-3" style=""><?php echo $registro['imagem_tipo']; ?></td>
                    <td class="pt-3" style=""><?php echo $registro['imagem_tamanho']; ?></td>
                    <td class="pt-3" style=""><?php echo $registro['usuario_nome']; ?></td>
                    <td class="pt-3" style=""><?php echo $registro['caminho_abreviado']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
            
            <caption class="m-0 p-0">
             <?php echo "Registros totais: <b>$quantia_total_registro_banco</b> | Registros na Página: <b>$quantia_total_registro</b>"; ?>
            </caption>
            
            <div class="row mt-3 ml-3 mb-4  "><a href="cadastro-imagem.php"><button type="button" class="btn btn-primary">Adicionar</button></a></div>
            
            <nav aria-label="Page navigation example">
              <ul class="pagination">
    
                <li class="page-item <?php echo $pagina_atual == 1 ? "invisible" : ""; ?> ">
                  <a class="page-link" href="form-galeria.php?pagina_atual=<?php echo ($pagina_atual -1); ?>">&laquo;</a>
                </li>
                <?php
                //definir links para navegaçao entre paginas
                for($link = $pagina_atual -3, $limite_link = $link +6; $link <= $limite_link; $link++){
                    if($link < 1){
                      $link = 1;
                      $limite_link = 7;
                    }
                    if($limite_link > $quantidade_paginas){
                      $limite_link = $quantidade_paginas;
                      $link = $limite_link -6;
                    }
                    if($link <1){
                      $link =1;
                      $limite_link = $quantidade_paginas;
                    }
                    if($link == $pagina_atual){ ?>
                      <li class="page-item active" aria-current="page">
                        <a class="page-link"  href="#"><?php echo $link; ?><span class="sr-only">(current)</span></a>
                      </li>
                      <?php }else { ?>
                <li class="page-item">
                  <a class="page-link" href="form-galeria.php?pagina_atual=<?php echo $link; ?>"><?php echo $link; ?></a>
                </li>
                <?php }
                } ?> 
                <li class="page-item <?php echo $pagina_atual == $quantidade_paginas ? "disabled" : ""; ?> ">
                  <a class="page-link" href="form-galeria.php?pagina_atual=<?php echo ($pagina_atual +1); ?>">&raquo;</a>
                </li>
              </ul>
            </nav>
        </div>
    </main>
    <footer class="container-fluid  bg-light fixed-bottom">
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