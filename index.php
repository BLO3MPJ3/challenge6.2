<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csstemplates/main.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <title>V!st@Cars - Homepage</title>
</head>
<body>
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="occasions.php">Showroom</a></li>
    <li><a href="#informatie">Informatie</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>

<?php

    $photo= "<div class='slideshowcontainer'>";

    require_once ('./includes/connection.inc.php');
   
      $sql = "SELECT * FROM tb_cars LIMIT 5";

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

        $photo .= "<div class='cell'><div class='photo'><img src='./dbimages/" . $rowimage['name_image'] . "' width='250px' /></div>";

    }

  }

    echo $photo;

?>

  </div>




<footer id="footer">
    V!ST@CARS © 2021
</footer>
  
  
</body>
</html>