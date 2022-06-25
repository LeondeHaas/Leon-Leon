<?php

include ('../Includes/connecter.php');

    $id = (int)$_GET['id'];

    $sql = "SELECT * FROM bestemmingen WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt -> bindParam(":id", $_GET['id']);
    $stmt -> execute();
    $i = $stmt -> fetch();
?>