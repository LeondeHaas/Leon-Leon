<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/revieuws.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <title>Make your rating</title>
  </head>
  <body id="home">
    <?php
        require_once("includes/header.php");
    ?>
    <div class="header-space"></div>
    <main class="review-page">
      <h1>Laat een review achter!</h1>
      <div class="review">
        <div class="user-rating">
          <div class="user-review">
            <p>
            <input class="field" type="text" name="name" placeholder="Your full Name">
            <input class="field" type="text" bestemming="name" placeholder="Bestemming beoordelen">
            </p>
          </div>
          <div class="star-rating">
            <div class="star-rating-stars">
              <button class="star">&#9734;</button>
              <button class="star">&#9734;</button>
              <button class="star">&#9734;</button>
              <button class="star">&#9734;</button>
              <button class="star">&#9734;</button>
            </div>
            <p class="current-rating">0 of 5</p>
          </div>
          <textarea
            name="bericht"
            id=""
            cols="25"
            rows="5"
            placeholder="Uw review."
          ></textarea
          ><br />
          <!-- form review | verder af makenen zodat goed is -->
            <form action="includes/review_connect.php" method="POST">
            <select id="rating" name="rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option></select
            ><br /><br/>
            <button name="insert_reviews" class="submit" type="submit">Verstuur</button>
            </form>
            <!-- form stopt hier -->
                
                <?php 
                    include("includes/review_connect.php")
                ?>
        </div>
      </div>
      <div class="reviews">
        <h2>Lees hier reviews van onze klanten!</h2>
        <?php include("includes/reviews_page.php") ?>
      </div>
    </main>
    <?php
        require_once("includes/footer.php");
    ?>
    <script src="js/starrating.js"></script>
    <script
      src="https://kit.fontawesome.com/460a8e1fd0.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
