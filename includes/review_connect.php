<?php
  var_dump($_POST);
include ('connecter.php');

if(isset($_POST['includes/insert_reviews'])){
    $sql = "INSERT INTO review (ID, vluchtID, naam, bericht, rating, bestemming) VALUES ($ID, $vluchtID, $naam, $bericht, $rating, $bestemming)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':ID', $_POST['ID']);
    $stmt->bindParam(':vluchtID', $_POST['vluchtID']);
    $stmt->bindParam(':naam', $_POST['naam']);
    $stmt->bindParam(':bericht', $_POST['bericht']);
    $stmt->bindParam(':rating', $_POST['rating']);
    $stmt->bindParam(':bestemming', $_POST['bestemming']);
    $stmt->execute();
    header('Location: boeken.php');
}
?>