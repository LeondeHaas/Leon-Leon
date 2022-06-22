<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/backend.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <div class="header">
        <h3>Welkom terug Admin,</h3>
        <a class="pg" href="../inloggen.php"><h3 class="logout">Uitloggen</h3></a>
    </div>
</header>
<body>
    <div class="hidden"></div>
    <div class="crud">
        <a href="createform.php"><button class="create"><h1>Create</h1></button></a>
         <button class="update"><h1>Update</h1></button>
          <button class="delete"><h1>Delete</h1></button>
           <a href="https://trello.com/b/pLMXKTJs/crudproject"><button class="trello"><h1>Trello</h1></button></a>
    </div>
<?php 
        include_once('../Includes/connecter.php');

        $query = "SELECT id, land, beschrijving, kosten FROM bestemmingen ";
        $stmt = $connect->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach($result as $product) {
?>
   <div class="container">
       <div class="containerboeken">
           <h1><?php echo $product['land'];?></h1>
            <h2><?php echo $product['beschrijving'];?></h2>
             <h2><?php echo $product['kosten'];?></h2>
       </div>
   </div>
   <div class="container1">
       <div class="containerschema">
           <h1>Vertrek: </h1>
            <h1>Aankomst: </h1>
             <h1>Gate: </h1>
              <h1>Bestemming: </h1>
               <h1>Vliegtuig: </h1>
       </div>
   </div>
   <div class="container">
    <div class="containerreizen">
         <h1>Voornaam :<?php echo $product['voornaam'];?></h1>
            <h1>Achternaam :<?php echo $product['achternaam'];?></h1>
             <h1>Duur :<?php echo $product['duur'];?></h1>
              <h1>Personen :<?php echo $product['personen'];?></h1>
               <h1>vliegveld :<?php echo $product['vliegveld'];?></h1>
               <h1>bestemming :<?php echo $product['bestemming'];?></h1>
    </div>
   </div>
   <?php
        }
?>
</body>
</html>