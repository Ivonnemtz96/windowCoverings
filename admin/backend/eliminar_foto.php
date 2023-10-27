<?php
 session_start();
 if (!isset($_SESSION['user_id'])) {
     header("Location: /admin/login/");
     exit();
 }
    // Incluir archivo de conexión a la base de datos
    require_once($_SERVER["DOCUMENT_ROOT"]."/admin/backend/config.php");
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $timezone = new DateTimeZone('America/Mexico_City');
    $fecha = new DateTime('now', $timezone);
    $fechaFormateada = $fecha->format('Y-m-d H:i:s');

    setlocale(LC_ALL, 'es_MX');
    $mesr = $fecha->format('m');
    $year = $fecha->format('Y');
    
    
    $galeria = $_GET['blogId'];
