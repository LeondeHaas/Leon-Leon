<?php 
require_once("connecter.php");
if ($_GET['name'] == "Boeken") {
    $sql = "UPDATE reizen SET geboekt = 1 WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':ID', $_GET['ID']);
    $stmt->execute();
    $result = $stmt->fetchAll();
    header ('location: ../boeken.php');
} else {
    header ('location: ../boeken.php');
}
