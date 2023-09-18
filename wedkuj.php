<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
   <?php
   $mysqli = new mysqli('localhost','root','','wedkowanie');
$mysqli->close();
   ?>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div id="wszystko">
        <div id="lewo">
<div id="BPL">
<h3>Ryby zamieszkujące rzeki</h3>
<ol>
    <li>
        Szczupak pływa w rzece Warta-Obrzycko,Wielkopolskie
    </li>
    <li>
        Leszcz pływa w rzece Przemsza k.Okradzinowa
    </li>
</ol>
</div>

<div id="BDL">
 <h3> Ryby drapieżne naszych wód</h3>
 <table>
    <tr>
        <td>L.p</td> <td>Gatunek</td> <td>Wystepowanie</td>
    </tr>
    <tr>
        <td>1</td> <td>Szczupak</td>  <td>stawy,rzeki</td>
    </tr>
    <tr>
        <td>3</td><td>Sandacz</td> <td>stawy,jeziora, rzeki</td>
    </tr>
    <tr>
        <td>4</td><td>Okon</td><td>rzeki</td>
    </tr>
    <tr>
        <td>5</td> <td>Sum</td> <td>jeziora, rzeki</td>
    </tr>
    <tr>
        <td>6</td> <td>Dorsz</td> <td>morza,oceany</td>
    </tr>
 </table></div>
</div>

<div id="BP">
    <img src="ryba1.jpg" alt="">
    <br>
    <a href="">Pobierz Kwerende</a></br>
</div>




    <footer>
        <p>Strone wykonał: Jakub Czajkowski</p>
    </footer>
</body>
</html>