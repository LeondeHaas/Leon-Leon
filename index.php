<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/styles.css" />
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
    <?php
    include("includes/header.php")
    ?>
    <body>
      <!----moving background--->
      <div class="backgroundborder">
        <video autoplay muted loop> 
          <source src="igv/video/tropical-island.mp4" type="video/mp4">
        </video>
      

      <!----normale content---->
      <div class="overlappen"> 
        <div class="container">
          <div class="leftside">
            <form action="">
            <input class="vlucht" type="text">
            <input class="boeken" type="date" id="datumForm">
            <input class="boeken" type="date" id="datumForm2 ">
            </form>
          </div>
          <div class="rightside">
            <form action="">
              <input class="boeken" type="text">
              <input class="boeken" type="text">
            </form>
          </div>
        </div>
      </div> 
      <!----overlappen stopt---->
    </div>
  </body>
</html>
<script src="js/form.js"></script>

<!---- kleur: F1F1F1 (white), 23A99B, 5DC6EC, FF6600, FFFF28 ----->
