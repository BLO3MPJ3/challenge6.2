<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csstemplates/occasion.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <title>V!st@Cars - Occasions</title>
</head>

<?php
    require_once ('./includes/connection.inc.php');
   
        $sql = "SELECT * FROM tb_cars";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        //print_r($result);

    foreach($result as $key => $row) {

            $autotitle = "<div class= 'hoofdtitel'>"; // generate string with HTML, using the retrieved database values
            $autobutton = "<div class= 'abutton'>";
            $autosignature = "<div class= 'kenmerk'>";
    
            $autotitle .= $row['merk'] . " " . $row['model'] . " &euro; " . $row['vraagprijs'] . " ";
            $autobutton .= "<a href='./includes/proefritaanvraag.inc.php?idauto=" . $row['id'] ."'><button>Proefrit aanvragen</button></a>" . " " . "<button type='button'>Offerte aanvragen</button>" . " ";
            $autosignature .= "Status:" . $row['status'] . " " . "Bouwjaar:" . $row['bouwjaar'] . " " . "KM stand:" . $row['kmstand'] . " " . "Kenteken:" . $row['kenteken'] . " " . "Kleur:" . $row['kleur'] . " " . "APK:" . $row['apk'] . " " . "Stuurbekrachtiging:" . $row['stuurbekrachtiging'] . " " . 
            "Airbag:" . $row['airbag'] . " " . "Brandstof:" . $row['brandstof'] . " " . "Gewicht:" . $row['gewicht'] . " " . "Transmissie:" . $row['transmissie'] . " " . "Deuren:" . $row['deuren'] . " " . "Airco:" . $row['airco'] . " " . "ABS optie:" . $row['abs_optie'] . " ";

        

    $autotitle .= "</div>";
    $autobutton .= "</div>";
    $autosignature .= "</div>";



    echo $autotitle;
    echo $autobutton;
    echo $autosignature;

 }

?>


