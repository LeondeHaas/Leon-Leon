<?php
  include ("update_id.php");
?>
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
            <form method="POST" action="update_data.php">
              <br>
            <label><h3>Update een bestemming</h3></label>
            <label><h3>Afbeelding</h3></label>
              <input type="text" name="afbeelding" value="<?php echo $i['afbeelding']; ?>">
            <label><h3>Land</h3></label>
              <input type="text" name="land" value="<?php echo $i['land'];?>">
            <label><h3>Schijf een beschijving </h3></label>
              <textarea type="text" id="message" rows="4" name="beschrijving" value="<?php echo $i['beschrijving'];?>"></textarea>
            <label><h3>Hoeveel kost de rijs? </h3></label>
               <input type="text" name="kosten" value="<?php echo $i['kosten'];?>">
          <br>
          <br class="hide">
            <input type="submit" value="Update reis" name="update">
        </form>
        </div>
         <div class="create_form_schema">
            <form method="POST" action="create1.php">
              <br>
              <label><h3>Update een schema</h3></label>
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
            <input type="submit" value="Update schema" name="update">
          </form>
</body>
</html>
</body>
</html>
