<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../csstemplates/proefenofferte.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <title>V!st@Cars - Offerteaanvraag</title>
</head>

<body>
<?php
    require_once ('./connection.inc.php');

        $sql = "SELECT merk, model, kenteken, vraagprijs FROM tb_cars WHERE id =" . $_GET['idauto'];

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $sql = "SELECT name_image FROM tb_image WHERE auto_id =" . $_GET['idauto'] . " LIMIT 1";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $resultimage = $stmt->fetchAll();

        // print_r($resultimage);

    foreach($result as $key => $row) {

        $proefrit= "<div class= 'proef'>";

        foreach($resultimage as $key2 => $row2) {
            $proefrit .= "<img src='../dbimages/" . $row2['name_image'] . "' width='200px'>";
        }

        $proefrit .= "<b><h2>Offerte aanvragen</h2></b>" . " " . "U wilt een offerte aanvragen voor de" . " " . "<b>" .
            $row['merk'] . " " . $row['model'] . " " . "van" . " &euro;" . $row['vraagprijs'] . " " . "</b>" .
            "met het kenteken" . " " . "<b>" . $row['kenteken'] . "</b> " . "<p id='click'>Vul hier uw gegevens in:<br><input class='info' type='text' id='fname' name='fname' autocomplete='off' placeholder='voornaam'><br>" . " " .
            "<input class='info' type='text' id='lname' name='lname' autocomplete='off' placeholder='achternaam'><br>" . " " . "<input class='info' type='tel1' id='phone' name='phone' autocomplete='off' placeholder='telefoonnummer'><br>" . " " . "<input class='info' type='email' id='email' name='email' placeholder='e-mail'  autocomplete='off'>" .
             "</br><br>Wij nemen zo spoedig mogelijk contact met u op om de offerte met u te bespreken." . "</br></br>" . "<button class='button button1' onclick='verzend()'>Verzenden</button>" . "</br></br>" . "Team V!st@Cars" . "</p>";
        
   
        echo $proefrit;

    }

    

?>

<script>

function verzend() {
  
  document.getElementById('click').innerHTML = 'Uw aanvraag is verzonden';
  document.getElementById('click').style.color = '#33d222';
 
}

</script>

</body>
</html>