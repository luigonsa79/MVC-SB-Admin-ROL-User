

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
    <span>Copyright &copy; Your Website 2020</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- url base -->
<script>
  const base_url = "<?= base_url(); ?>";
</script>

<!-- Essential javascripts for application to work-->
<script src="<?= media(); ?>/js/plantilla/jquery.min.js"></script>
<script src="<?= media(); ?>/js/plantilla/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= media(); ?>/js/plantilla/jquery.easing.min.js"></script>

<!-- plantilla -->
<script src="<?= media(); ?>/js/plantilla/sb-admin-2.min.js"></script>

<!-- fontawesome -->
<script src="<?= media(); ?>/plugins/fontawesome/fontawesome.js"></script>

<!-- Data table plugin-->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<!-- sweetalert.min -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- select min bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>

<script type="text/javascript" src="<?= media(); ?>/backend/functions_admin.js"></script>
<script src="<?= media(); ?>/backend/<?= $data['page_functions_js']; ?>"></script>
</body>

</html>