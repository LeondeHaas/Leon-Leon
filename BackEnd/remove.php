<?php

include_once('../includes/connecter.php');

if(isset($_POST['verwijderen'])){

    $id = $_POST['id'];
    var_dump($id);
    $sql = "DELETE FROM bestemmingen WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindparam(':id', $id);
    $stmt->execute();

    header('location:../backend.php');
    exit();
} ?> 