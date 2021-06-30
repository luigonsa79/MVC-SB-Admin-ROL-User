<!DOCTYPE html>
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
  <link href="<?= media(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?= media(); ?>/css/signin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
</head>

<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1><?= $data['page_title']; ?></h1>
    </div>
    <div class="login-box flipped">
      <!-- <div id="divLoading">
        <div>
          <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
        </div>
      </div> -->
      <form id="formCambiarPass" name="formCambiarPass" class="forget-form" action="">
        <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $data['idpersona']; ?>" required>
        <input type="hidden" id="txtEmail" name="txtEmail" value="<?= $data['email']; ?>" required>
        <input type="hidden" id="txtToken" name="txtToken" value="<?= $data['token']; ?>" required>
        <h3 class="login-head"><i class="fas fa-key"></i> Cambiar contraseña</h3>
        <div class="form-group">
          <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Nueva contraseña" required>
        </div>
        <div class="form-group">
          <input id="txtPasswordConfirm" name="txtPasswordConfirm" class="form-control" type="password" placeholder="Confirmar contraseña" required>
        </div>
        <div class="form-group btn-container">
          <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>REINICIAR</button>
        </div>
      </form>
    </div>
  </section>

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