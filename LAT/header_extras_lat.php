<?php if (!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>

<?php
if ($ADMINAREA) {
?>
    <style>
        .appGini {
            font-size: 0.757em;
            background-color: white;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
    <script>
        $j(function() {
            $j('.form-group').addClass('row');
            $j('.form-group > label').removeClass().addClass('col-sm-3 col-form-label');
            $j('.form-group > div').removeClass().addClass('col-sm-9');
        });
    </script>

<?php
}
?>


<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>LAT/css/LAT_Custom.css">
<script src="<?php echo PREPEND_PATH; ?>LAT/plugins/jquery-jeditable/jquery.jeditable.js"></script>
<script src="<?php echo PREPEND_PATH; ?>LAT/tvedit/tv.edit.js"></script>
<script src="<?php echo PREPEND_PATH; ?>LAT/plugins/commons/myCommonJs.js"></script>

<script>
    function getMpi(data) {
        $j.ajax({
            url: '<?php echo PREPEND_PATH; ?>LAT/profile/mpi_AJAX.php',
            type: 'POST',
            data: data,
            success: function(file) {
                file = JSON.parse(file);
                if (file.image !== null && file.image !== '') {
                    $j(".user-image").attr("src", "<?php echo PREPEND_PATH; ?>images/" + file.thumb + "");
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
</script>