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

        $content .= "<div class='photo'><img src='./dbimages/" . $rowimage['name_image'] . "' style='width: 400px'></div>";

    }

    $content .= "<div class='moreinfo'> " . $row['merk'] . " " . $row['model'] . " &euro; " . $row['vraagprijs'] . "</div>";

  }
  
 $content .="</div>";

    echo $content;

?>

<div id="nieuwscontainer">
<div class="nieuws"><p><img src="./images/info.jpg" style="vertical-align:top;margin:0px 0px; width: 360px">Informatie pagina</p></br></div>
<div class="nieuws"><p><img src="./images/contact.png" style="vertical-align:top;margin:0px 0px; width: 360px">Contact pagina</p></div>
</div>

<div id="footerbalk">
  <p>V!ST@CARS © 2021 </p>
</div>
  
  
</body>
</html>