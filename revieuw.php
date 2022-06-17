<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/revieuws.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,300&family=Macondo&display=swap"
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>rating system</title>
</head>
    <?php
    include("includes/header.php")
    ?>
<body>
    <div class="header-space"></div> 
    <div class="star-rating-around">
        <div id="1" class="stars"> &#9734; </div>
        <div id="2" class="stars"> &#9734; </div>
        <div id="3" class="stars"> &#9734; </div>
        <div id="4" class="stars"> &#9734; </div>
        <div id="5" class="stars"> &#9734; </div>
        <div class="inful-form">
            <form>
                <label for="fname">name:</label><br>
                <input type="text" id="name" name="John">
                <label for="lname">country/location:</label><br>
                <input type="text" id="country" name="Japan">
            </form>
        </div>
    </div>
    <?php
    include("includes/footer.php")
    ?>

    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function () {
            ResetStarColors();

            $('.&#9734;').mouseover(function () {
                ResetStarColors();

                var currentIndex = parseInt($(this).data('id'))

                for (var i=1; i <= currentIndex; i++)
                    $('.&#9734;:eq('+i+')').css('color', 'yellow');
            });
                
            $('.&#9734;').mouseleave(function () {
                ResetStarColors();
            });
        )};

        function ResetStarColors () {
            $('.&#9734;').css('color, white');
        }
    </script>

</body>
</html>