<?php

include ('../Includes/connecter.php');

if(isset($_POST['insert_bestemming'])){
    $afbeelding     = $_POST['afbeelding'];
    $land           = $_POST['land'];
    $beschrijving   = $_POST['beschrijving'];
    $kosten         = $_POST['kosten'];
    $sql = "INSERT INTO `bestemmingen` (`afbeelding`, `land`, `beschrijving`, `kosten`) VALUES ('$afbeelding','$land','$beschrijving','$kosten');";
    $connect->prepare($sql)->execute();
    header("Location: ../index.php");
    exit();
}
// header('Location: ../backend.php');

?>



