<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/styles.css" />
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
      <!----moving background--->
      <div class="backgroundborder">
        <video autoplay muted loop> 
          <source src="igv/video/tropical-island.mp4" type="video/mp4">
        </video>
      

      <!----normale content---->
      <div class="overlappen"> 
          <?php
            if (!empty($_POST)){
            $search = $_POST['search'];
            $sql = "SELECT * FROM bestemmingen WHERE land LIKE '%". $search. "%'";
            } else {
              $sql = "SELECT afbeelding, land, beschrijving, kosten FROM bestemmingen ORDER BY land DESC";
            }
          ?>
          <?php
            include_once("includes/connecter.php");
          ?>
          <form action="boeken.php" method="POST">
            <div class="search_bar">
              <input name="search" type="text" placeholder="Search.." /> 
            </div>
          </form>
        <div class="achtergrond-searchbar">
         <div class="infoblok">
          <a href="boeken.php"><img src="igv/img/pexels-jess-loiterton-5232332.jpg" alt=""></a>
          </div>
      <div class="infoblok">
        <a href="schema.php"><img src="igv/img/pexels-andrea-piacquadio-845451.jpg" alt=""></a>
        </div>
            
          </div>
        </div>
      </div> 
      <!----overlappen stopt---->
    </div>
          <div class="show-tainer">
        <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="numbertext">1 / 4</div>
              <img src="igv/img/Image1.jpg" style="width:100%">
              <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 4</div>
              <img src="igv/img/Image2.jpg" style="width:100%">
              <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 4</div>
              <img src="igv/img/Image3.jpg" style="width:100%">
              <div class="text">Caption Three</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">4 / 4</div>
              <img src="igv/img/Image4.jpg" style="width:100%">
              <div class="text">Caption Three</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
        </div>
        <!-- The dots/circles -->
        <div class="onderstaan">
              <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
              <span class="dot" onclick="currentSlide(4)"></span>
            </div>
          </div>
      </div>
    <?php
    include("includes/footer.php")
    ?>
  </body>
</html>

</script> 
--->
<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<!---- kleur: F1F1F1 (white), 23A99B, 5DC6EC, FF6600, FFFF28 ----->
