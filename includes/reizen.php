<?php
if (isset($_POST['boekenSubmit'])) {

    require_once("../includes/connecter.php");

    $sql = "INSERT INTO reizen (voornaam, achternaam, duur, personen, vliegveld, bestemming) VALUES (:voornaam, :achternaam, :duur, :personen, :vliegveld, :bestemming)";

    $hashedPassword = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':voornaam', $_POST['voornaam']);
    $stmt->bindParam(':achternaam', $_POST['achternaam']);
    $stmt->bindParam(':duur', $_POST['duur']);
    $stmt->bindParam(':personen', $_POST['personen']);
    $stmt->bindParam(':vliegveld', $_POST['vliegveld']);
    $stmt->bindParam(':bestemming', $_POST['bestemming']);
    $stmt->execute();