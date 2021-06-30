<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="description" content="Tienda Virtual Abel OSH">
  <meta name="author" content="Luis Gonzalez | Desarrollo Web">
  <meta name="generator" content="Hugo 0.84.0">
  <meta name="theme-color" content="#009688">
  <link rel="shortcut icon" href="<?= media(); ?>/images/favicon.ico">
  <title><?= $data['page_tag'] ?></title>

  <!-- Plantilla CSS-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- select-min-bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">

  <!-- dataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
  <!-- plantilla -->
  <link href="<?= media(); ?>/css/plantilla/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">

</head>

<body>

  <!-- Page Wrapper -->
  <div id="wrapper">

      <!-- Sidebar -->
      <?php require_once("sidebar_admin.php"); ?>
      <!-- End sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require_once("nav_admin.php");?>
        <!-- End of Topbar -->


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $data['page_title'] ?></h1>
