<?php
if(isset($_POST['insert_bestemming'])) {
    require_once('../Includes/connecter.php');

    $sql = "INSERT INTO bestemmingen (afbeelding, land, beschrijving, kosten) VALUES (:afbeelding, :land, :beschrijving, :kosten)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':afbeelding', $_POST['afbeelding']);
    $stmt->bindParam(':land', $_POST['land']);
    $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
    $stmt->bindParam(':kosten', $_POST['kosten']);
    $stmt->execute();
    header('Location: ../index.php');
} else {
    header('Location: ../index.php');
}

if(isset($_POST['insert_schema'])){
    require_once('../Includes/connecter.php');

    $sql = "INSERT INTO schemareizen (vertrek, aankomst, gate, bestemming, vliegtuig) VALUES (:vertrek, :aankomst, :gate, :bestemming, :vliegtuig)";
    $connect->prepare($sql);
    $stmt->bindParam(':vertrek', $_POST['vertrek']);
    $stmt->bindParam(':aankomst', $_POST['aankomst']);
    $stmt->bindParam(':gate', $_POST['gate']);
    $stmt->bindParam(':bestemming', $_POST['bestemming']);
    $stmt->bindParam(':vliegtuig', $_POST['vliegtuig']);
    $stmt->execute();
    header('Location: ../index.php');
} else {
    header('Location: ../index.php');
}

?>
