<?
    include('backend/indexcontroller.php');   
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Medir';
$medir = 'current';
include('includes/head.php');
?>

<body>
<?
     include('includes/analitycs.php');   
    ?>

    <div class="boxed_wrapper ltr">
        <?php
            include('modules/'.$lenguaje.'/header.php');
            include('modules/'.$lenguaje.'/medir.php');
            include('includes/redes.php');
            include('modules/'.$lenguaje.'/footer.php');
        ?>
    </div>

    <?
     include('includes/scripts.php');   
    ?>

</body>

</html>