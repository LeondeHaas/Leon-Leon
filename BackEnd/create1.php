<?php

include ('../Includes/connecter.php');

if(isset($_POST['insert_schema'])){
    $vertrek        = $_POST['vertrek'];
    $aankomst       = $_POST['aankomst'];
    $gate           = $_POST['gate'];
    $bestemming     = $_POST['bestemming'];
    $vliegtuig      = $_POST['vliegtuig'];
    $sql = "INSERT INTO `schemareizen` (`vertrek`, `aankomst`, `gate`, `bestemming`, 'vliegtuig') VALUES ('$vertrek','$aankomst','$gate','$bestemming','$vliegtuig');";
    $connect->prepare($sql)->execute();
    header("Location: ../index.php");
    exit();
}
// header('Location: ../backend.php');

?>
