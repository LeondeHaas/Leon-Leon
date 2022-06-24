<?php

include ('../Includes/connecter.php');

// $sql = "INSERT INTO menu (naam, beschrijving, prijs, categorie)
// VALUES (:naam,:beschrijving,:prijs,:categorie)";
// $sql = "INSERT INTO bestemmingen (afbeelding, land, beschrijving, kosten)
// VALUES (:afbeelding,:land,:beschrijving,:kosten);"
// if (isset($_POST['insert_bestemming'])){
//     $stmt->bindParam(":afbeelding", $_POST['afbeelding']);
//     $stmt->bindParam(":land", $_POST['land']);
//     $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
//     $stmt->bindParam(":kosten", $_POST['kosten']);
//     $stmt = $connect->prepare($sql);
//     $stmt->execute();
// }
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
