<?php
  require('conexaoBanco.php');

$consulta_sql = 
    "SELECT 
      noticia_id
     FROM
      tb_noticia";

  //realizar operação no banco de dados
  $resultado_consulta_slq = mysqli_query($conexao, $consulta_sql);

  //contando o numero de linhas retornadas
  $quantia_total_registro_banco = mysqli_num_rows($resultado_consulta_slq);

  //definir a quantidade de registros por pagina
  $quantidade_registros_por_pagina = 2;

  //definir o total de registros por pagina
  $quantidade_paginas = ceil($quantia_total_registro_banco / $quantidade_registros_por_pagina);

  //verificar qual e a pagina atual 
  $pagina_atual = isset($_GET['pagina_atual']) ? filter_input(INPUT_GET,'pagina_atual',FILTER_SANITIZE_NUMBER_INT) : 1;

  //definir inicio da nova consulta no banco de dados conforme pagina atual
  $inicio_consulta = ($quantidade_registros_por_pagina * $pagina_atual) - $quantidade_registros_por_pagina;

  //consulta a ser realizada no banco de dados para exibir os dados
  $consulta_sql_final =  
    "SELECT 
      noticia_id,
      noticia_titulo,
      noticia_assunto,
      noticia_imagem
     FROM
        tb_noticia
     ORDER BY
        noticia_id ASC
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
    <title>Editar | Noticias</title>
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
        <div class="row mt-5">
            <div class="container"><h3>Editar Noticias</h3></div>
        </div>
        <div class="container mt-5 table-responsive-lg">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">Editar</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Imagem</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  //Mostrar registros enquanto houver
                  while($registro = mysqli_fetch_array($resultado_consulta_slq, MYSQLI_BOTH)){ ?>
                  <tr>
                    <td>
                        <a class="btn btn-sm btn-primary mt-2" style="width: 65px;" 
                          href="edicao-noticia.php?noticia_id=<?php echo $registro['noticia_id']; ?>" >Editar<a>

                        <a class="btn btn-sm btn-primary mt-2" style="width: 65px;" onclick="return confirm('Deseja Apagar?');"
                          href="deletar-noticia.php?noticia_id=<?php echo $registro['noticia_id'] ?>">Apagar</a>
                    </td>
                    <th scope="row"><?php echo $registro ['noticia_titulo'] ?></th>
                    <td><?php echo $registro ['noticia_assunto'] ?></td>
                    <td><?php echo $registro ['noticia_imagem'] ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
            <caption class="m-0 p-0">
              <?php echo "Registros totais: <b>$quantia_total_registro_banco</b> | Registros na Página: <b>$quantia_total_registro</b>"; ?>
            </caption>
            <div class="row mt-3 ml-3 mb-4  "><a href="cadastros.html"><button type="button" class="btn btn-primary">Adicionar</button></a></div>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                
                <li class="page-item <?php echo $pagina_atual == 1 ? "invisible" : ""; ?> ">
                  <a class="page-link" href="editar-noticias.php?pagina_atual=<?php echo ($pagina_atual -1); ?>">&laquo;</a>
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
                  <a class="page-link" href="editar-noticias.php?pagina_atual=<?php echo $link; ?>"><?php echo $link; ?></a>
                </li>
                <?php }
                  } ?> 
                <li class="page-item <?php echo $pagina_atual == $quantidade_paginas ? "disabled" : ""; ?> ">
                  <a class="page-link" href="editar-noticias.php?pagina_atual=<?php echo ($pagina_atual +1); ?>">&raquo;</a>
                </li>

              </ul>
            </nav>
        </div> 
    </main>
    <footer class="container-fluid bg-light footer-fim">
      <div class="">
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