<?php
    require_once ('./includes/connection.inc.php');

        $sql = "SELECT * FROM tb_cars";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        //print_r($result);

    $autos = "<table>"; // generate string with HTML, using the retrieved database values

        foreach($result as $key => $row) {
    
            $autos .= "<tr><td rowspan='6'></td><td colspan='5' rowspan='2'><div class='td1'>" . $row['merk'] . " " . $row['model'] . "</div></td><td rowspan='6'><div class='td2'>&euro; " . $row['vraagprijs'] . "</div></td></tr>
                <tr></tr><tr><td>Status: " . $row['status'] . "</td><td>Bouwjaar: " . $row['bouwjaar'] . "</td><td>Kmstand: " . $row['kmstand'] . "</td><td>Kenteken: " . $row['kenteken'] . "</td><td>Kleur: " . $row['kleur'] . "</td></tr>
                <tr><td>APK: " . $row['apk'] . "</td><td></td><td>Stuurbekrachtiging: " . $row['stuurbekrachtiging'] . "</td><td>Airbag: " . $row['airbag'] . "</td><td>Brandstof: " . $row['brandstof'] . "</td></tr>
                <tr><td>Gewicht: " . $row['gewicht'] . "</td><td></td><td>Transmissie: " . $row['transmissie'] . "</td><td></td><td></td></tr>
                <tr><td>Aantal deuren: " . $row['deuren'] . "</td><td>Airco: " . $row['airco'] . "</td><td>ABS: " . $row['abs_optie'] . "</td><td></td><td></td></tr><tr></tr>";
         }
    
    $autos .= "</table>";
    echo $autos;
    
?>
