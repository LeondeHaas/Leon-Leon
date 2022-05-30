<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,300&family=Macondo&display=swap"
      rel="stylesheet"
    />
  </head>
  <?php
    include("includes/header.php")
    ?>
  <body>
      <!----moving background--->
      <div class="backgroundborder">
        <video autoplay muted loop> 
          <source src="igv/video/tropical-island2.mp4" type="video/mp4">
        </video>
        
        <div class="container">
        <div class="contact-box">
            <div class="left"></div>
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

    <?php
    include("includes/footer.php")
    ?>
    <footer>
        <p>  © Leon's | LionFlights | 🦁💢 </p>
    </footer>    
  </body>
</html>

<!---- kleur: F1F1F1 (white), 23A99B, 5DC6EC, FF6600, FFFF28 ----->

