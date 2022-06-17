<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/backend.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/backend.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <div class="header">
        <h3>Welkom terug Admin,</h3>
        <a class="pg" href="../inloggen.php"><h3 class="logout">Uitloggen</h3></a>
    </div>
  </header>
<body>
    <div class="hidden"></div>
    <div class="crud">
        <a href="createform.php"><button class="create"><h1>Create</h1></button></a>
         <button class="update"><h1>Update</h1></button>
          <button class="delete"><h1>Delete</h1></button>
           <a href="https://trello.com/b/pLMXKTJs/crudproject"><button class="trello"><h1>Trello</h1></button></a>
    </div>
    <div class="create_form_container">
        <div class="create_form_reizen">
            <form method="POST">
            <a href="backend.php"><button class="delete"><h1>Ga terug</h1></button></a>
            <label><h3>Vul de gegevens in voor een bestemming</h3></label>
            <label><h3>Kies een afbeelding </h3></label>
              <select>
                <option name="bestemming" value = "" selected>Afbeelding</option>
                <option name="bestemming" value = "">Afbeelding</option>
              </select>
                 <label><h3>Kies een Land </h3></label>
              <select>
                <option name="bestemming" value = "" selected>Japan</option>
                <option name="bestemming" value = "">Amerika</option>
              </select>
              <label><h3>Schijf een beschijving </h3></label>
                <textarea id="message" rows="4"></textarea>
              <label><h3>Hoeveel kost de rijs? </h3></label>
               <input type="text" name="personen">
          <br>
          <br class="hide">
            <input type="submit" value="creëer reis" name="boekenSubmit">
        </form>
        </div>
         <div class="create_form_schema">
            <form method="POST">
            <a href="backend.php"><button class="delete"><h1>Ga terug</h1></button></a>
              <label><h3>Vul de gegevens in voor een reis schema</h3></label>
              <label><h3>Vertrek</h3></label>
               <input type="text" name="personen">
               <label><h3>Aankomst</h3></label>
               <input type="text" name="personen">
               <label><h3>Gate</h3></label>
               <input type="text" name="personen">
               <label><h3>Bestemming</h3></label>
               <input type="text" name="personen">
               <label><h3>Vliegtuig</h3></label>
               <input type="text" name="personen">
          <br>
          <br class="hide">
            <input type="submit" value="creëer schema" name="boekenSubmit">
        </form>
        </div>
    </div>
    </div>
    <!-- overig -->  <!-- overig -->  <!-- overig -->  <!-- overig -->  <!-- overig -->
   <div class="container">
       <div class="containerboeken">
           <h1>Amerika</h1>
            <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem quasi consectetur doloribus repudiandae fugit facere ducimus cumque, distinctio, at dolor exercitationem adipisci excepturi incidunt rerum! Labore eos dolorem harum vitae!</h2>
             <h2>$499</h2>
       </div>
   </div>
   <div class="container1">
       <div class="containerschema">
           <h1>Vertrek: </h1>
            <h1>Aankomst: </h1>
             <h1>Gate: </h1>
              <h1>Bestemming: </h1>
               <h1>Vliegtuig: </h1>
       </div>
   </div>
   <div class="container">
    <div class="containerreizen">
         <h1>Voornaam :<?php echo $product['voornaam'];?></h1>
            <h1>Achternaam :<?php echo $product['achternaam'];?></h1>
             <h1>Duur :<?php echo $product['duur'];?></h1>
              <h1>Personen :<?php echo $product['personen'];?></h1>
               <h1>vliegveld :<?php echo $product['vliegveld'];?></h1>
               <h1>bestemming :<?php echo $product['bestemming'];?></h1>
    </div>
   </div>
</body>
</html>
</body>
</html>