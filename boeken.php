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
      </div>
      <div class="boeken_keuze">
         <img class="hover" src="igv/img/001-open-book.png" alt="">
        <form>
          <h1>Boek uw vlucht</h1>
          <br>
          <label><h3>Voornaam:</h3></label>
          <input class="trans" type="text">
          <br>
          <label><h3>Achternaam:</h3></label>
          <input type="text">
          <br>
          <label><h3>Hoeveel dagen blijft U weg?</h3></label>
          <input type="number">
          <br>
          <label><h3>Hoeveel personen?</h3></label>
          <input type="number">
          <br>
          <label><h3>Vanaf welk vliegveld vertrekt U?</h3></label>
          <select>
            <option value = "Amsterdam Airport" selected>Amsterdam Airport</option>
            <option value = "Eindhoven Airport">Eindhoven Airport</option>
            <option value = "Teuge Airport">Teuge Airport</option>
         </select>
         <br>
         <label><h3>Waar gaat u naartoe?</h3></label>
          <select>
            <option value = "" selected>Amerika</option>
            <option value = "">Nederland</option>
            <option value = "">Korea</option>
            <option value = "">Engeland</option>
            <option value = "">Japan</option>
         </select>
         <br>
         <br class="hide">
           <input type="submit" value="Submit">
        </form>
      </div>
    <div class="containerboeken">
      <!-- dit is een container boeken       -->
      <div class="bestemming">
        <img class="boekenimg" src="igv/img/tropical island.jpg" alt="" />
        <div class="boekeninfo">
          <h1 class="land">Amerika</h1>
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
    </div>
     <?php
    include("includes/footer.php")
    ?>
  </body>
</html>
