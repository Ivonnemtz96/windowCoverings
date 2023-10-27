<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Contacto';
$contacto = 'current';
include('includes/head.php');
?>

<body>
<?
     include('includes/analitycs.php');   
    ?>
    <div class="boxed_wrapper ltr">
        <?php
            include('includes/header.php');
            include('modules/contact.php');
            include('includes/redes.php');
            include('includes/footer.php');
        ?>
    </div>

    <?
     include('includes/scripts.php');   
    ?>

</body>

</html>