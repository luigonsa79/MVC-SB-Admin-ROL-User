<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Luis Gonzalez | Desarrollo Web">
  <meta name="generator" content="Hugo 0.84.0">
  <meta name="theme-color" content="#009688">
  <link rel="shortcut icon" href="<?= media(); ?>/images/favicon.ico">
  <title><?= $data['page_tag']; ?></title>

  <link rel="canonical" href="<?= base_url(); ?>">
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?= media(); ?>/css/signin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
</head>

<body class="text-center login-page">

  <div id="back"></div>

  <main class="form-signin">
    <!-- login-content es el padre de login-box para esconder el formulario de reset password -->
    <section class="login-content">
      <!-- clase login-box esconde el siguiente formulario de reset password -->
      <div class="login-box">

        <!-- form login -->
        <form class="login-form" name="formLogin" id="formLogin" action="">

          <img class="mb-4" src="<?= media(); ?>/images/avatar.png" alt="" width="72" height="57">

          <h3 class="login-head text-white"></i>INICIAR SESIÓN</h3>

          <div class="form-floating mt-3">
            <input id="txtEmail" name="txtEmail" type="email" class="form-control" placeholder="Email" autofocus>
            <label for="txtEmail">Usuario</label>
          </div>

          <div class="form-floating mt-3">
            <input id="txtPassword" name="txtPassword" type="password" class="form-control" placeholder="Contraseña">
            <label for="txtPassword">Contraseña</label>
          </div>

          <div class="form-group">
            <div class="utility">
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">¿Olvidaste tu contraseña?</a></p>
            </div>
          </div>

          <div id="alertLogin" class="text-center"></div>

          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN</button>
          </div>

          <p class="mt-5 mb-3 text-muted">&copy; 2019–2021</p>

        </form>

        <!-- form reset password -->
        <form id="formRecetPass" name="formRecetPass" class="forget-form" action="">

          <div class="align-middle">

            <img class="mb-4" src="<?= media(); ?>/images/avatar.png" alt="" width="72" height="57">

            <h3 class="login-head text-white">¿Olvidaste contraseña?</h3>

            <div class="form-floating">
              <input id="txtEmailReset" name="txtEmailReset" type="email" class="form-control" placeholder="Email" autofocus>
              <label for="txtEmail">Usuario</label>
            </div>

            <div class="form-group btn-container">
              <button type="submit" class="btn btn-primary btn-block mt-3"><i class="fa fa-unlock fa-lg fa-fw"></i>REINICIAR</button>
            </div>

            <div class="form-group mt-3">
              <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Iniciar sesión</a></p>
            </div>

            <p class="mt-5 mb-3 text-muted">&copy; 2019–2021</p>

        </form>

      </div>



      </div>
    </section>
  </main>

  <script>
    const base_url = "<?= base_url(); ?>";
  </script>


  <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= media(); ?>/plugins/fontawesome/fontawesome.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?= media(); ?>/backend/<?= $data['page_functions_js']; ?>"></script>
</body>

</html>