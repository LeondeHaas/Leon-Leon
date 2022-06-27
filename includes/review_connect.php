<?php

include ('connecter.php');

if(isset($_POST['insert_reviews'])){
    $naam           = $_POST['naam'];
    $bericht        = $_POST['bericht'];
    $rating         = $_POST['rating'];
    $bestemming     = $_POST['bestemming'];
    $sql = "INSERT INTO 'reviews' ('naam', 'bericht', 'rating', 'bestemming') VALUES ('$naam','$bericht','$rating','$bestemming');";
    $connect->prepare($sql)->execute();
    header("Location: ../index.php");
    exit();
}

?>