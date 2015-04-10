<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>  
        <?php
        
        $bedrijfzender = "";
        $bedrijfontvanger = "";
        $voornaamzender = "";
        $voornaamontvanger = "";
        $achternaamzender = "";
        $achternaamontvanger = "";
        $adreszender = "";
        $adresontvanger = "";
        $postcodezender = "";
        $postcodeontvanger = "";
        $plaatszender = "";
        $plaatsontvanger = "";
        $emailadreszender = "";
        $emailadresontvanger = "";
        $telefoonnummerzender = "";
        $telefoonnummerontvanger = "";
        
        print ("<h4>Om uw pakket aan te melden dient u de gegevens in te vullen.<br><br>");
        
        print ("<form method='POST' action='aanmelden.php'"
                    . "<table><tr><td><th> Verzendadres </th> <th> Ontvangstadres </th></td></tr>"
                    . "<br><br>"
                    . "<tr><td><input type='text' name='bedrijfzender' placeholder='Bedrijf' value='" . $bedrijfzender . "'></td>"
                    . "<td><input type='text' name='bedrijfontvanger' placeholder='Bedrijf' value='" . $bedrijfontvanger . "' required></td></tr>"
                    . "<br><br>"
                    . "<tr><td><input type='text' name='lastname' placeholder='Voornaam' value='" . $voornaamzender . "' required></td></tr>"
                    . "<td><input type='text' name='lastname' placeholder='Voornaam' value='" . $voornaamontvanger . "' required></td></tr>"
                    . "<br><br>"
                    . "<td><input type='text' name='lastname' placeholder='Achternaam' value='" . $achternaamzender . "' required></td></tr>"
                    . "<td><input type='text' name='lastname' placeholder='Achternaam' value='" . $achternaamontvanger . "' required></td></tr>"
                    . "<br><br>"
                    . "<tr><td><input type='text' name='adres' placeholder='Straatnaam + huisnummer' value='" . $adreszender . "' required></td>"
                    . "<td><input type='text' name='lastname' placeholder='Straatnaam + huisnummer' value='" . $adresontvanger . "' required></td></tr>"
                    . "<br><br>"
                    . "<tr><td><input type='text' name='postcode' placeholder='Postcode' value='" . $postcodezender . "' required></td>"
                    . "<td><input type='text' name='lastname' placeholder='Postcode' value='" . $postcodeontvanger . "' required></td></tr>"
                    . "<br><br>"
                    . "<td><input type='text' name='city' placeholder='Woonplaats' value='" . $plaatszender . "' required></td>"
                    . "<td><input type='text' name='lastname' placeholder='Woonplaats' value='" . $plaatsontvanger . "' required></td></tr>"
                    . "<br><br>"
                    . "<tr><td><input type='email' name='email' placeholder='Email-adres' value='" . $emailadreszender . "' required></td>"
                    . "<td><input type='text' name='lastname' placeholder='Email-adres' value='" . $emailadresontvanger . "' required></td></tr>"
                    . "<br><br>"
                    . "<tr><td><input type='tel' name='telefoonnummer' placeholder='Telefoonnummer' value='" . $telefoonnummerzender . "' required></td></tr>"
                    . "<td><input type='text' name='lastname' placeholder='Telefoonnummer' value='" . $telefoonnummerontvanger . "' required></td></tr>"
                    . "<br><br>"
                    . "<tr><td><input type='submit' name='doorgaan' value='Doorgaan'"
                    . "</td></tr></table></form>");
        
        if(isset($_POST["doorgaan"])){
           mysqli_query($connect, "INSERT INTO  VALUES ('" . $bedrijfszender . "','" . $voornaamzender . "','" . $achternaamzender . "','" . $adreszender . "','" . $adreszender . "','" . $postcodezender . "','" . $plaatszender . "','" . $emailadreszender . "','" . $telefoonzender . "");
           mysqli_query($connect, "INSERT INTO  VALUES ('" . $bedrijfsontvanger . "','" . $voornaamontvanger . "','" . $achternaamontvanger . "','" . $adresontvanger . "','" . $adresontvanger . "','" . $postcodeontvanger . "','" . $plaatsontvanger . "','" . $emailadresontvanger . "','" . $telefoonontvanger . "");
        }
        
        ?>
    </body>
</html>