<?php

include ('../Includes/connecter.php');

// $sql = "INSERT INTO menu (naam, beschrijving, prijs, categorie)
// VALUES (:naam,:beschrijving,:prijs,:categorie)";
$sql = "INSERT INTO bestemmingen (afbeelding, land, beschrijving, kosten)
VALUES (:afbeelding,:land,:beschrijving,:kosten);"

$stmt = $connect->prepare($sql);
$stmt->bindParam(":afbeelding", $_POST['afbeelding']);
$stmt->bindParam(":land", $_POST['land']);
$stmt->bindParam(":beschrijving", $_POST['beschrijving']);
$stmt->bindParam(":kosten", $_POST['kosten']);
$stmt->execute();

header('Location: ../backend.php');

?>
