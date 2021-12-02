<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id=banner1>
        <h1>Internetowy sklep z eko-warzywami</h1>
    </div>
    <div id=banner2>
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <a href="HTTPS://TERAPIASOKAMI.PL/" target="_blank"><li>soki</li></a>
        </ol>
    </div>
    <div id="glowny">
        <?php
            $con = mysqli_connect("localhost","root","","dane2");
            $zap = mysqli_query($con,"SELECT nazwa, ilosc, opis, cena, zdjecie FROM Produkty WHERE Rodzaje_id=1 OR Rodzaje_id=2");
            while( $bloki = mysqli_fetch_array($zap)) {
                echo "<div class='skrypblok'>
                <img src='".$bloki['zdjecie']."' alt='warzywniak'>
                <h5>".$bloki['nazwa']."</h5>
                <p>opis: ".$bloki['opis']."</p>
                <p>na stanie: ".$bloki['ilosc']."</p>
                <h2>".$bloki['cena']." zł </h2>
                </div>";
            }
        ?>
    </div>
    <div id="stopka">
        <form method="post">
            Nazwa:<input type="text" name="nazwa">
            Cena:<input type="text" name="cena">
            <input type="submit" value="Dodaj produkt" name="submit" onclick="window.location.reload()">
        </form>
        <p>Stronę wykonał: Zając</p>
        <?php
            if(isset($_POST['submit'])) {
                $n = $_POST['nazwa'];
                $c = $_POST['cena'];
                $zap2 = mysqli_query($con, "INSERT INTO produkty (Rodzaje_id, Producenci_id, nazwa, ilosc, opis, cena, zdjecie)
                VALUES (1, 4,'$n',10,'','$c','owoce.jpg');");
            }
            else {}
            mysqli_close($con);
        ?>
    </div>
</body>
</html>