<?php
include ('connecter.php');
var_dump($_POST);
if(isset($_POST['voornaam'])){
  $sql = "INSERT INTO reviews (naam, bericht, rating, bestemming) VALUES (:naam, :bericht, :rating, :bestemming)";
  $stmt = $connect->prepare($sql); 
    $stmt->bindParam(':voornaam', $_POST['voornaam']);
    $stmt->bindParam(':achternaam', $_POST['achternaam']);
    $stmt->bindParam(':duur', $_POST['duur']);
    $stmt->bindParam(':personen', $_POST['personen']);
    $stmt->bindParam(':vliegveld', $_POST['vliegveld']);
    $stmt->execute();
    header('Location: ../boeken.php');
}
?>