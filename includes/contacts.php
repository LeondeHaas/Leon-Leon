<?php
if (isset($_POST['contactSubmit'])) 
    require_once("../includes/connecter.php");

    $sql = "INSERT INTO contact (name, email, phone, message,) VALUES (:name, :mail, :phone, :message,)";
    
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':phone', $_POST['phone']);
    $stmt->bindParam(':message', $_POST['message']);
    $stmt->execute();
    header('Location: ../index.php');
