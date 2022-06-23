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
           <a href="https://trello.com/b/pLMXKTJs/crudproject"><button class="trello"><h1>Trello</h1></button></a>
    </div>
    
   <div class="container">
     <div class="bestemming">
            <table>
                <tr>
                    <th>Land</th>
                    <th>beschrijving</th>
                    <th>kosten</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>             
                <?php 
                        include_once('../Includes/connecter.php');

                        $query = "SELECT id, land, beschrijving, kosten FROM bestemmingen ";
                        $stmt = $connect->prepare($query);
                        $stmt->execute();
                        $result = $stmt->fetchAll();

                        foreach($result as $product) {
                ?>
                <tr>
                    <td><h1><?php echo $product['land'];?></h1></td>
                    <td><p><?php echo $product['beschrijving'];?></p></td>
                    <td><h2>$<?php echo $product['kosten'];?></h2></td>
                    <td><a href="update.php?id=<?php echo $product['id'];?>">
                    <button class="update">Update</button></a><td>            
                    <form method="POST" action="remove.php">
                    <input name="id" value="<?php echo $product['id']; ?>"type="hidden" readonly>
                    <input type="submit" name="verwijderen" value="Delete" class="delete">
                    </form>
                </tr>              
   <?php
        }
?>
                <tr>
                    <th>voornaam</th>
                    <th>achternaam</th>
                    <th>duur</th>
                    <th>personen</th>
                    <th>vliegveld</th>
                    <th>bestemming</th>
                </tr>
                  <?php 
                        include_once('../Includes/connecter.php');

                        $query = "SELECT id, land, beschrijving, kosten FROM bestemmingen ";
                        $stmt = $connect->prepare($query);
                        $stmt->execute();
                        $result = $stmt->fetchAll();

                        foreach($result as $product) {
                ?>
                <tr>
                    <td><h1>Voornaam :<?php echo $product['voornaam'];?></h1></td>
                    <td><h1>Achternaam :<?php echo $product['achternaam'];?></h1></td>
                    <td><h1>Duur :<?php echo $product['duur'];?></h1></td>
                    <td><h1>Personen :<?php echo $product['personen'];?></h1></td>
                    <td>h1>vliegveld :<?php echo $product['vliegveld'];?></h1></td><
                    <td><h1>bestemming :<?php echo $product['bestemming'];?></h1></td>
                    <td><a href="update.php?id=<?php echo $product['id'];?>">
                    <button class="update">Update</button></a><td>            
                    <form method="POST" action="remove.php">
                    <input name="id" value="<?php echo $product['id']; ?>"type="hidden" readonly>
                    <input type="submit" name="verwijderen" value="Delete" class="delete">
                    </form>
                </tr>              
   <?php
        }
?>       
            </table>
        </div>   
   </div>
</body>
</html>