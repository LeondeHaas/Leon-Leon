<?php
include ('connecter.php');
var_dump($_POST);
if(isset($_POST['voornaam'])){
  $sql = "INSERT INTO reviews (naam, bericht, rating, bestemming) VALUES (:naam, :bericht, :rating, :bestemming)";
  $stmt = $connect->prepare($sql); 
    $stmt->bindParam(':naam', $_POST['voornaam']);
    $stmt->bindParam(':bericht', $_POST['message']);
    $stmt->bindParam(':rating', $_POST['rating']);
    $stmt->bindParam(':bestemming', $_POST['bestemming']);
    $stmt->execute();
    header('Location: ../boeken.php');
}
?>