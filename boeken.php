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
              $sql = "SELECT * FROM bestemmingen WHERE land LIKE '%". $search. "%'";
              } else {
                $sql = "SELECT * FROM bestemmingen ORDER BY land DESC";
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
      <?php
        include_once('Includes/connecter.php');

        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach($result as $product) {
?>
      <!-- dit is een container boeken       -->
      <div class="bestemming">
        <img class="boekenimg" src="igv/img/tropical island.jpg" alt="" />
        <div class="boekeninfo">
          <h1 class="land"><?php echo $product['land'];?></h1>
          <h2><?php echo $product['beschrijving'];?></h2>
          <h2><?php echo $product['kosten'];?></h2>
        </div>
        <div class="boekeninfo1">
          <a href="reviews.php">
            <button class="boek1"><img class="boek2" src="igv/img/002-satisfaction.png" alt="">Laat een review achter</button>
          </a>
        </div>
      </div>
      <!-- dit is een container boeken       -->
      <?php
      }
?>
    </div>
     <?php
    include("includes/footer.php")
    ?>
  </body>
</html>
