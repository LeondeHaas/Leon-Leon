<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/contact.css" />
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
          <source src="igv/video/Drinks-background.mp4" type="video/mp4">
        </video>

      <div class="headerspace"></div>
        <div class="container">
          <div class="contact-box">
              <div class="left">
                <div class="plaatje">
                  <img class="zeikantlogo" src="igv/img/helpdesk.png" alt="">
                </div>
              </div>
              <div class="right">
                  <h2>Contact Us</h2>
                  <input type="text" class="field" placeholder="Your Name">
                  <input type="text" class="field" placeholder="Your Email">
                  <input type="text" class="field" placeholder="Phone">
                  <textarea placeholder="Message" class="field"></textarea>
                  <button class="btn">Send</button>
              </div>
          </div>
        </div>
        
  </div>
     
      <?php
      include("includes/footer.php")
      ?>     

  </body>
</html>

<!---- kleur: F1F1F1 (white), 23A99B, 5DC6EC, FF6600, FFFF28 ----->