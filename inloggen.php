<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/inloggen.css" />
    <link rel="stylesheet" href="css/footer.css" />
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
<div class="backgroundborder">
    <video autoplay muted loop> 
        <source src="igv/video/Pexel-Waterfall-video.mp4" type="video/mp4">
    </video>
      <div class="container">
        <img src="igv/img/islandlogo.png" />
        <form action="includes/login.php" method="POST">
          <div class="form-input">
            <input
              type="text"
              name="gebruikersnaam"
              placeholder="Enter the User Name"
            />
          </div>
          <div class="form-input">
            <input type="password" name="wachtwoord" placeholder="password" />
          </div>
          <input
            type="submit"
            value="LOGIN"
            name="inlogsubmit"
            class="btn-login"
          />
        </form>
        <!-- <a href="registreren.php"
          ><button class="register">Registreren</button></a
        > -->
      </div>
    </div>
    <?php
    include("includes/footer.php")
?>

<!-- <form class="login_form" action="../includes/login.php" method="POST" >
                <h1>Inloggen</h1>
                <div class="elem-group">
                    <label for="name">Gebruikersnaam:</label>
                    <input type="text" id="name" name="naam"  placeholder="Gebruikersnaam" pattern=[A-Z\sa-z]{3,20} required>
                </div> -->
  </body>

  <!---- kleur: F1F1F1 (white), 23A99B, 5DC6EC, FF6600, FFFF28 ----->
</html>
