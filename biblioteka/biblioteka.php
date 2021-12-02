<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka miejska</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="banner">
    <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
</div>
<div id="lewy">
    <h3>W naszych zbiorach znajdziesz dzieła następujących autorów:</h3>
    <ul>
        <?php
            $con = mysqli_connect('localhost','root','','biblioteka');
            $zap = mysqli_query($con,'SELECT imie, nazwisko FROM autorzy');
            while($tab = mysqli_fetch_array($zap)) {
                echo "<li>".$tab['imie']." ".$tab['nazwisko']."</li>";
            }
        ?>
    </ul>
</div>
<div id="srodkowy">
    <h3>Dodaj nowego czytelnika</h3>
    <form method="post">
        imię:<input type="text" name="imie"> <br>
        nazwisko:<input type="text" name="nazwisko"> <br>
        rok urodzenia:<input type="number" name="uro"> <br>
        <input type="submit" value="DODAJ" name="submit">
        <?php
            if (isset($_POST['submit'])) {
                $imie = $_REQUEST['imie'];
                $nazwisko = $_REQUEST['nazwisko'];
                $uro = $_REQUEST['uro'];
                $imieskrot = strtoupper(mb_substr($imie, 0, 2));
                $nazwiskoskrot = strtoupper(mb_substr($nazwisko, 0, 2));
                $uroskrot = strtoupper(mb_substr($uro, -2));
                $kod = $imieskrot.$nazwiskoskrot.$uroskrot;
                echo "<br>Czytelnik: ".$imie." ".$nazwisko." został dodany do bazy danych"; 
                mysqli_query($con,"INSERT INTO czytelnicy (imie,nazwisko,kod) VALUES ('$imie','$nazwisko','$kod');");
                mysqli_close($con);
            }
        ?>
    </form>
</div>
<div id="prawy">
    <img src="biblioteka.png" alt="książki">
    <h4>ul. Czytelnicza 25 <br>12-120 Książkowice<br> tel.: 123123123<br> e-mail: 
    <a href="mailto:biuro@biblioteka.pl">biuro@biblioteka.pl</a></h4>
</div>
<div id="stopka">
    <p>Projekt strony: ZAJĄC</p>
</div>
</body>
</html>