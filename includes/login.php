<?php 
 if (isset($_POST['inlogsubmit'])) {
    session_start();
    require_once("../includes/connecter.php");

    $sql = "SELECT ID, wachtwoord FROM accounts WHERE naam = :naam";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':naam', $_POST['gebruikersnaam']);
    $stmt->execute();
    $result = $stmt->fetch();

    if ($stmt->rowCount() > 0) {
        if($_POST['wachtwoord'] === $result['wachtwoord']) {
            $_SESSION['ID'] = $result['ID'];
            header('Location: ../BackEnd/backend.php');
        } else {
            echo "username of password incorrect!";
        }
    } else {
        echo "username of password incorrect!";
        exit();
    }




} else {
    header('Location: ../inloggen.php');
}