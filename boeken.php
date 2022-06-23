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
  <body>
    <div class="hidden"></div>
      <div class="searchbar_space">
        <div class="overlappen"> 
            <?php
              if (!empty($_POST)){
              $search = $_POST['search'];
              $sql = "SELECT * FROM producten WHERE naam LIKE '%". $search. "%'";
              } else {
                $sql = "SELECT * FROM producten ORDER BY categorie DESC";
              }
            ?>
          <form action="bestellen.php" method="POST">
            <div class="search_bar">
              <input name="search" type="text" placeholder="Search.." /> 
            </div>
          </form>
        </div> 
        <div class="timer">
  <p id="demo"></p>
    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

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
      <div class="boeken_keuze">
         <img class="hover" src="igv/img/001-open-book.png" alt="">
        <form action="inludes/reizen.php" method="POST">
            <h1>Boek uw vlucht</h1>
            <br>
            <label><h3>Voornaam:</h3></label>
            <input name="voornaam" class="trans" type="text">
            <br>
            <label><h3>Achternaam:</h3></label>
            <input type="text" name="achternaam">
            <br>
            <label><h3>Hoeveel dagen blijft U weg?</h3></label>
            <input type="number" name="duur">
            <br>
            <label><h3>Hoeveel personen?</h3></label>
            <input type="number" name="personen">
            <br>
            <label><h3>Vanaf welk vliegveld vertrekt U?</h3></label>
                <select>
                  <option name="vliegveld" value = "Amsterdam Airport" selected>Amsterdam Airport</option>
                  <option name="vliegveld" value = "Eindhoven Airport">Eindhoven Airport</option>
                  <option name="vliegveld" value = "Teuge Airport">Teuge Airport</option>
                </select>
            <br>
            <label><h3>Waar gaat u naartoe?</h3></label>
              <select>
                <option name="bestemming" value = "" selected>Amerika</option>
                <option name="bestemming" value = "">Nederland</option>
                <option name="bestemming" value = "">Korea</option>
                <option name="bestemming" value = "">Engeland</option>
                <option name="bestemming" value = "">Japan</option>
              </select>
          <br>
          <br class="hide">
            <input type="submit" value="Submit" name="boekenSubmit">
        </form>
      </div>
    <div class="containerboeken">
      <!-- dit is een container boeken       -->
      <div class="bestemming">
        <img class="boekenimg" src="igv/img/tropical island.jpg" alt="" />
        <div class="boekeninfo">
          <h1 class="land"></h1>
          <h2>
            Lorem ipsum doloR sit amet consectetur adipisicing elit. Dicta illo
            corporis soluta nihil co            Lorem ipsum doloR sit amet consectetur adipisicing elit. Dicta illo
            corporis soluta nihil consequuntur in aliquid quasi, quo quidem abnsequuntur in aliquid quasi, quo quidem ab
          </h2>
        </div>
        <div class="boekeninfo1">
          <a href="reviews.php">
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
    </div>
     <?php
    include("includes/footer.php")
    ?>
  </body>
</html>
