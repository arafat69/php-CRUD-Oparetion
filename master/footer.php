<?php
// $path = 'http://localhost/phpCRUD/';
?>

<script src="<?= $path ?>js/jquery-3.6.0.min.js"></script>
<script src="<?= $path ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= $path ?>js/datatables.min.js"></script>
<script src="<?= $path ?>js/toastr.min.js"></script>
<script src="<?= $path ?>js/photoPreview.js"></script>
<script>
    $("#myTable").DataTable({
        ordering: false,
    });
</script>
<?php if (isset($_SESSION['message'])) : ?>
    <script>
        toastr.success('<?= $_SESSION['message'] ?>');
    </script>
<?php endif; unset($_SESSION['message']) ?>

</body>

</html>