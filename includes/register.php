<?php
if (isset($_POST['registrerenSubmit'])) {
    require_once("../includes/connecter.php");

    $sql = "INSERT INTO accounts (naam, achternaam, wachtwoord, datum, email) VALUES (:naam, :achternaam, :wachtwoord, :datum, :email)";

    $hashedPassword = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':naam', $_POST['naam']);
    $stmt->bindParam(':achternaam', $_POST['achternaam']);
    $stmt->bindParam(':wachtwoord', $hashedPassword);
    $stmt->bindParam(':datum', $_POST['datum']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->execute();

    header('Location: ../inloggen.php');

} else {
    header('Location: ../registreren.php');
}