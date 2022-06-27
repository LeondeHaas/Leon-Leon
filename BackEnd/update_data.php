<?php

    include ('../Includes/connecter.php');

    if (isset ($_POST['update_bestemming'])){

        $afbeelding = $_POST['afbeelding'];
        $land = $_POST['land'];
        $beschrijving = $_POST['beschrijving']; 
        $kosten = $_POST['kosten'];

        $sql = "UPDATE bestemmingen SET afbeelding=?, land=?, beschrijving=?, kosten=? WHERE id=?";
        $stmt = $connect->prepare($sql);
        $stmt->execute([$afbeelding, $land, $beschrijving, $kosten, $id]);
        header("Location: ../index.php");
        exit();
    }

    
    if (isset ($_POST['update_schema'])){

        $vertrek        = $_POST['vertrek'];
        $aankomst       = $_POST['aankomst'];
        $gate           = $_POST['gate'];
        $bestemming     = $_POST['bestemming'];
        $vliegtuig      = $_POST['vliegtuig'];
        $sql = "UPDATE schemareizen SET vertrek=?, aankomst=?, gate=?, bestemming=?, vliegtuig=? WHERE id=?";
        $stmt = $connect->prepare($sql);
        $stmt->execute([$vetrek, $aankomst, $gate, $bestemming, $vliegtuig, $id]);
        header("Location: ../index.php");
        exit();
    }

?>
