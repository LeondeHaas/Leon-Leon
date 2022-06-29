<?php
    if (isset ($_POST['update_bestemming'])){
        require_once('../Includes/connecter.php');

        $sql = "UPDATE bestemmingen SET afbeelding = :afbeelding, land = :land, beschrijving = :beschrijving, kosten = :kosten WHERE id = id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':afbeelding', $_POST['afbeelding']);
        $stmt->bindParam(':land', $_POST['land']);
        $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
        $stmt->bindParam(':kosten', $_POST['kosten']);
        $stmt->execute();
        header("Location: ../index.php");
        exit();
    }

      if (isset ($_POST['update_schema'])){
        require_once('../Includes/connecter.php');

        $sql = "UPDATE schemareizen SET vertrek = :vertrek, aankomst = :aankomst, gate = :gate, bestemming = :bestemming, vliegtuig = :vliegtuig WHERE id=id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':vertrek', $_POST['vertrek']);
        $stmt->bindParam(':aankomst', $_POST['aankomst']);
        $stmt->bindParam(':gate', $_POST['gate']);
        $stmt->bindParam(':bestemming', $_POST['bestemming']);
        $stmt->bindParam(':vliegtuig', $_POST['vliegtuig']);
        $stmt->execute();
        header("Location: ../index.php");
        exit();
    }
    
?>

