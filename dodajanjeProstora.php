<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="third">
        <h1>Dodaj prostor</h1>
        <form action="dodajProstor2.php" method="post">
        <div class="text"> Stanje: </div><div class="box"><input type="text" name="stanje"></div>
        <div class="text"> Velikost: </div><div class="box"><input type="number" name="velikost"></div>
        <div class="text"> Lokacija: </div><div class="box"><input type="text" name="lokacija"></div>
        <div class="text"> Najemnina: </div><div class="box"><input type="number" name="najemnina"></div>
        <div class="text"> Opis: </div><div class="box"><input type="text" name="opis"></div>
        <div id="submit"><input type="submit" value="Poslji"></div>
        </form>
        </div>
    </body>
</html>
