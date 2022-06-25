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
    <div class="create_form_container">
        <div class="create_form_reizen">
            <form method="POST" action="create.php">
              <br>
            <a href="../backend.php"><button><h1>Ga terug</h1></button></a>
            <label><h3>Vul de gegevens in voor een bestemming</h3></label>
            <label><h3>Afbeelding</h3></label>
              <input type="text" name="afbeelding">
            <label><h3>Land</h3></label>
              <input type="text" name="land">
            <label><h3>Schijf een beschijving </h3></label>
              <textarea type="text" id="message" rows="4" name="beschrijving"></textarea>
            <label><h3>Hoeveel kost de rijs? </h3></label>
               <input type="text" name="kosten">
          <br>
          <br class="hide">
            <input type="submit" value="creëer reis" name="insert_bestemming">
        </form>
        </div>
         <div class="create_form_schema">
            <form method="POST" action="create.php">
              <br>
            <a href="backend.php"><button><h1>Ga terug</h1></button></a>
              <label><h3>Vul de gegevens in voor een reis schema</h3></label>
              <label><h3>Vertrek</h3></label>
               <input type="text" name="vertrek">
               <label><h3>Aankomst</h3></label>
               <input type="text" name="aankomst">
               <label><h3>Gate</h3></label>
               <input type="text" name="gate">
               <label><h3>Bestemming</h3></label>
               <input type="text" name="bestemming">
               <label><h3>Vliegtuig</h3></label>
               <input type="text" name="vliegtuig">
          <br>
          <br class="hide">
            <input type="submit" value="creëer schema" name="insert_schema">
          </form>
</body>
</html>
</body>
</html>