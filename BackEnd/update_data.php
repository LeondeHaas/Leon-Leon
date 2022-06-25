<?php

    include ('../Includes/connecter.php');

    if (isset ($_POST['update'])){

        $afbeelding = $_POST['afbeelding'];
        $land = $_POST['land'];
        $beschrijving = $_POST['beschrijving']; 
        $kosten = $_POST['kosten']

        $sql = "UPDATE bestemmingen SET afbeelding=?, land=?, beschrijving=?, kosten=? WHERE id=?";
        $stmt = $connect->prepare($sql);
        $stmt->execute([$afbeelding, $land, $beschrijving, $kosten, $id]);
    }

       
    header("Location: ../index.php");
    exit();

?>
