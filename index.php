<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./csstemplates/main.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <title>V!st@Cars - Homepage</title>
</head>
<body>
<div id="menubalk">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="occasions.php">Showroom</a></li>
      <li><a href="info.php">Informatie</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
</div>

<?php

    $content= "<div id='contentcontainer'>";

    require_once ('./includes/connection.inc.php');
    
   
      $sql = "SELECT * FROM tb_cars LIMIT 3";

      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();

    //print_r($result);

    foreach($result as $key => $row) {

      $sql = "SELECT name_image FROM tb_image WHERE auto_id =" . $row['id'] . " LIMIT 1";

      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $resultimage = $stmt->fetchAll();



    foreach($resultimage as $keyimage => $rowimage) {

        $content .= "<div id='autocontainer'>";
        $content .= "<div class='photo'><img src='./dbimages/" . $rowimage['name_image'] . "' class='fotoauto'></div>";

    }

    $content .= "<div id='moreinfo'><div class='moreinfos'>" . $row['merk'] . " " . $row['model'] . "<br />" . " &euro; " . $row['vraagprijs'] . "</div></div></div>";

  }
  
 $content .="</div>";

    echo $content;

?>

<div id="nieuwscontainer">
  <div class="nieuws"><img src='./images/info.jpg' class="Titel"><p class="nieuwstitel"><div class= "Taal">Laatste informatie</div><div class="NogMeerTekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lectus quam, mattis quis nisi a, finibus congue metus. Cras eu leo elit. Nam hendrerit sed nulla sed placerat. Sed et mi tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum nulla a vulputate aliquet. Mauris vitae nibh vehicula felis rhoncus sollicitudin. Nulla consectetur commodo nisi, eget accumsan quam dictum nec. Maecenas eros eros, sodales a posuere vitae, tempus a nulla.</div></div></div></p>
  <div class="nieuws"><img src="./images/contact.png" class='Titel'><p class="nieuwstitel"><div class= "Taal">Bij ons staat de ZOOM sessie klaar</div><div class="NogMeerTekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lectus quam, mattis quis nisi a, finibus congue metus. Cras eu leo elit. Nam hendrerit sed nulla sed placerat. Sed et mi tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum nulla a vulputate aliquet. Mauris vitae nibh vehicula felis rhoncus sollicitudin. Nulla consectetur commodo nisi, eget accumsan quam dictum nec. Maecenas eros eros, sodales a posuere vitae, tempus a nulla.</div></div></div></p>
</div>

<div id="footerbalk">
<a href="login.php" class="login">Login</a>
  <p class="logo">V!ST@CARS © 2021</p>
  
</div></div>
  
  
</body>
</html>