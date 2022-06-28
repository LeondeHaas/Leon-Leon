<?php 
 if (isset($_POST['submit'])) {
    require_once("connecter.php");

    $sql = "INSERT INTO contact (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':phone', $_POST['phone']);
    $stmt->bindParam(':message', $_POST['message']);
    $stmt->execute();
    header('Location: ../contact.php');
} else {
    header('Location: ../contact.php');
}

//deze stuctuur is beste en makkelijkste//