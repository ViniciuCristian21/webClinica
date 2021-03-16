<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Entrar</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="./Public/css/bootstrap.min1.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="./Public/css/signin.css" rel="stylesheet">
  </head>
    <body class="text-center">
      <form class="form-signin" action="login_logout.php" method="POST">
        <a href="Index.php"><img class="mb-4" src="/Public/Images/Logo-titulo.png" alt="" width="72" height="72"></a>
        <h1 class="h3 mb-3 font-weight-normal">Area restrita, Adiminstrador</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="usuario_email" value="" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="usuario_senha" value="" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> lembrar-se de mim
          </label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Entrar" name="entrar">
        <p class="mt-5 mb-3 text-muted">&copy; 2020-2020</p>
      </form>
  </body>
</html>
