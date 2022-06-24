<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/schema.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,300&family=Macondo&display=swap"
      rel="stylesheet"
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <?php
    include("includes/header.php")
    ?>
  <body>
    <div class="headerspace"></div>
    <div class="backgroundborder">
      <video autoplay muted loop>
        <source src="igv/video/production ID_3678380.mp4" type="video/mp4" />
      </video>
                <  <?php 
                        include_once('Includes/connecter.php');

                        $query = "SELECT vertrek, aankomst, gate, bestemming, vliegtuig FROM schemareizen ";
                        $stmt = $connect->prepare($query);
                        $stmt->execute();
                        $result = $stmt->fetchAll();

                        foreach($result as $product) {
                ?>
          <div class="containerschema">
            <table class="schematext">
              <tr>
                <th><h2>Vertrek<h2></th>
                <th><h2>Aankomst<h2></th>
                <th><h2>Gate<h2></th>
                <th><h2>Bestemming<h2></th>
                <th><h2>Vliegtuig<h2></th>
              </tr>
              <tr>
                <td><?php echo $product['vertrek'];?></td>
                <td><?php echo $product['aankomst'];?></td>
                <td><?php echo $product['gate'];?></td>
                <td><?php echo $product['bestemming'];?></td>
                <td><?php echo $product['vliegtuig'];?></td>
              </tr>
            </table>
          </div>
        </div>
                 <?php
      }
?>        
    </div>
 
  </body>
</html>
