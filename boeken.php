<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/boeken.css" />
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
    <?php
      include("includes/connecter.php")
        ?>
  <body>
    <div class="hidden"></div>
      <div class="searchbar_space">
        <div class="overlappen"> 
  <form class="nav_form" method="get">
    <input type="text" placeholder="vind je bestemming" name="search">
</form>
</div>
<div class="journey_main_div" id="journey">
<?php   
    if (isset($_GET['search'])){
    $search = '%'.$_GET['search'].'%';
    $sql = "SELECT * FROM bestemmingen WHERE land LIKE :search ORDER BY land ASC";
    $stm = $connect->prepare($sql);
    $stm->bindParam(":search", $search);
  } else {
    $sql = "SELECT * FROM bestemmingen ORDER BY land ASC";
    $stm = $connect->prepare($sql);
  }
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $i){
        echo'      <div class="bestemming">
        <img class="boekenimg" src="'.$i["afbeelding"].'" alt="" />
        <div class="boekeninfo">
          <h1 class="land">'.$i["land"].';</h1>
          <h2>'.$i["beschrijving"].';</h2>
          <h2>Kosten : '.$i["kosten"]. ';</h2>
        </div>';
      }
    if(empty($result)){
      echo "<div class='journey_fill_div'><h1> No results found!</h1><p>Try searching something else?</p></div>";}
?>
        </div> 
        <div class="timer">
  <p id="demo"></p>
    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Jun 27, 2022 13:00:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);
    </script>
  </div>
  <div class="deals"><h3>na dat deze timer is afgelopen zijn de deals voorbij.</h3></div>
      </div>
        <div class="revieuw-border"><a href="revieuw.php"><h3>maak hier uw revieuw over ons</h3></a></div>
            <label><h3>Waar gaat u naartoe?</h3></label>
                 <select>
                  <option value ="<?php echo $product['land'];?>"></option>
                </select>
          <br>
          <br class="hide">
            <input type="submit" value="Boek uw vlucht" name="boekenSubmit">
        </form> -->
      <!-- </div> -->
      <div class="boekingen">
          <?php include("includes/boeking_read.php")?>
        </div>
    <div class="containerboeken">
      <?php
          include_once('Includes/connecter.php');
          $sql = "SELECT * FROM bestemmingen";
          $stmt = $connect->prepare($sql);
          $stmt->execute();
          $result = $stmt->fetchAll();
          foreach($result as $product) {
        ?>
      <!-- dit is een container boeken       -->
      <div class="bestemming">
        <img class="boekenimg" src="<?php echo $product['afbeelding'];?>" alt="" />
        <div class="boekeninfo">
          <h1 class="land"><?php echo $product['land'];?></h1>
          <h2><?php echo $product['beschrijving'];?></h2>
          <h2>Kosten : $<?php echo $product['kosten'];?></h2>
        </div>
        <div class="boekeninfo1">
          <a href="revieuw.php">
            <button class="boek1"><img class="boek2" src="igv/img/002-satisfaction.png" alt="">Laat een review achter</button>
          </a>
        </div>
      </div>
      <!-- dit is een container boeken       -->
      <button onclick="topFunction()" class="back_to_top" type="button"><h1>&#8593;</h1></button>
      <script>
        //Get the button:
        mybutton = document.getElementById("back_to_top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
      </script>
      <?php
        }
      ?>
    </div>
    <?php
      include("includes/footer.php")
    ?>
  </body>
</html>
