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
                <h1>
                  Hallo, <br> <br> waarmee kunnen wij u <br> helpen?
                </h1>
              </div>
              <div class="right">
                  <h2>Contact Us</h2>
                  <form methode="GET" action='includes/contact.php' id="form">
                    <input type="text" class="field" placeholder="Your Name" name='name' id="name" required>
                    <input type="email" class="field" placeholder="Your Email"  name='email' required>
                    <input type="phone" class="field" placeholder="Phone" name='phone'>
                    <input type="password" class="field" placeholder="Password" name='password' id="password" required>
                    <textarea placeholder="Message" class="field" name='message'></textarea>
                    <button class="btn" name='submit'>Send</button>
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

<script>
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
  
</script>

<!---- kleur: F1F1F1 (white), 23A99B, 5DC6EC, FF6600, FFFF28 ----->