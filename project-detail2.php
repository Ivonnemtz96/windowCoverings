<?
// Incluir archivo de conexión a la base de datos
require_once($_SERVER["DOCUMENT_ROOT"]."/admin/backend/config.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/backend/validar_entrada.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Detalles';
$detalle = 'current';
include('includes/head.php');
?>

<body>
<?
     include('includes/analitycs.php');   
    ?>
    <div class="boxed_wrapper ltr">
        <?php
            include('includes/header.php');
            include('modules/project-detail2.php');
            include('includes/redes.php');
            include('includes/footer.php');
        ?>
    </div>

    <?
     include('includes/scripts.php');   
    ?>

</body>

</html>