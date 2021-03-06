<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- DataTables -->
    <link rel="stylesheet" href="/public/css/dataTables.bootstrap4.css">
    <script src="/public/javascript/form.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<?php echo $content ;?>



<!-- jQuery -->
<script src="/public/javascript/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/public/javascript/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/public/javascript/jquery.dataTables.js"></script>
<script src="/public/javascript/dataTables.bootstrap4.js"></script>
<!-- SlimScroll -->
<script src="/public/javascript/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/public/javascript/fastclick.js"></script>
<!--  App -->
<script src="/public/javascript/adminlte.min.js"></script>
<!--  demo purposes -->
<script src="/public/javascript/demo.js"></script>
<!-- page script -->


<!-- TAble sort -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<!-- TAble sort -->

</body>
</html>