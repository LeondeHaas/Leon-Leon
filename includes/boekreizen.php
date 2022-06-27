<?php
  include ("connecter.php");

  if (isset($_POST['boekenSubmit']))   
    $voornaam        = $_POST['voornaam'];
    $achternaam      = $_POST['achternaam'];
    $duur            = $_POST['duur'];
    $personen        = $_POST['personen'];
    $vliegveld       = $_POST['vliegveld'];
    $bestemming      = $_POST['bestemming'];
    $sql = "INSERT INTO reizen (`voornaam`,`achternaam`,`duur`,`personen`,`vliegveld`,`bestemming`) VALUES ('$voornaam','$achternaam','$duur','$personen','$vliegveld','$bestemming')";
    $connect->prepare($sql)->execute();
    header('Location: ../boeken.php');

//     <?php

// include ('../Includes/connecter.php');

// if(isset($_POST['insert_bestemming'])){
//     $afbeelding     = $_POST['afbeelding'];
//     $land           = $_POST['land'];
//     $beschrijving   = $_POST['beschrijving'];
//     $kosten         = $_POST['kosten'];
//     $sql = "INSERT INTO `bestemmingen` (`afbeelding`, `land`, `beschrijving`, `kosten`) VALUES ('$afbeelding','$land','$beschrijving','$kosten');";
//     $connect->prepare($sql)->execute();
//     header("Location: ../index.php");
//     exit();
// }