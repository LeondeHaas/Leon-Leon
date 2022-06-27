<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/contact.css" />
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
          <source src="igv/video/Drinks-background.mp4" type="video/mp4">
        </video>

      <div class="headerspace"></div>
        <div class="container">
          <div class="contact-box">
              <div class="left">
               <div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Schiphol&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:400px;}</style><a href="https://www.embedgooglemap.net">google maps generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:400px;margin-top:50px;border-radius:50px;}</style></div></div>
              </div>
              <div class="right">
                <h2>Contact Us</h2>
                  <form name="myForm" action="includes/contacts.php" onsubmit="return validateForm()" method="post">
                    <input class="field" type="text" name="name" placeholder="Your full Name">
                    <input class="field" type="email" name="email" placeholder="E-mail">
                    <input class="field" type="phone" name="phone" placeholder="Phone number (not required)">
                    <input class="field" type="text" name="message" placeholder="mesage">
                    <input class="btn" type="submit" value="Submit" name="contactSubmit">
                  </form>
              </div>
          </div>
        </div>
      </div>
      <?php
      include("includes/footer.php")
      ?>    
  </body>
</html>

<!-- <script>
  const name = document.GetElementById('name')
  const password = document.GetElementById('password')
  const form = document.GetElementById('form')
  const errorElement = document.GetElementById('error')

  form.addEventListener('submit', (e) => {
    let messages = [] 
    if (name.value === '' || name.value == null ) {
      allert('name is required');
    }
    if (password.value === '' || password.value == null ) {
      allert('name is required');
    }
    if (email.value === '' || email.value == null ) {
      allert('name is required');
    }

    if (messages.lenght < 0) {
      e.preventDefault()
      errorElement.innerText = messages.join(', ')
    }
  })
  
</script> -->

<script>
function validateForm() {
  let x = document.forms["myForm"]["message"].value;
  if (x == "") {
    alert("message must be filled out");
    return false;
  }
}

</script>

<!---- kleur: F1F1F1 (white), 23A99B, 5DC6EC, FF6600, FFFF28 ----->