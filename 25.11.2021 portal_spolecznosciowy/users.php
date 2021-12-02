<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="banner"><h3>Portal Społecznościowy - panel administratora</h3></div>
    <div id="lewy">
        <h4>Użytkownicy</h4>
        <?php
             $con = mysqli_connect("localhost","root","","dane4");
             $zap1 = mysqli_query($con,"SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30;");
             while($lista = mysqli_fetch_array($zap1)) {
                $wiek = date("Y") - $lista['rok_urodzenia'];
               echo $lista['id'].". ".$lista['imie']." ".$lista["nazwisko"].", ".$wiek." lat<br>";
             }
        ?>
        <a href="settings.html">Inne ustawienia</a>
    </div>
    <div id="prawy">
        <h4>Podaj id użytkownika:</h4>
        <form method="post" action="users.php">
            <input type="number" name="numer">
            <input type="submit" value="ZOBACZ">
        </form>
        <hr>
        <?php
            @$num = $_POST['numer'];
            if(isset($num) && $num!=0){
            $zap2 = mysqli_query($con,"SELECT imie, nazwisko, rok_urodzenia, opis, zdjecie, hobby.nazwa AS nazwa FROM osoby JOIN hobby ON osoby.Hobby_id=hobby.id WHERE osoby.id=$num");
            $lista2 = mysqli_fetch_array($zap2);
            echo "<h2>".$num.". ".$lista2['imie']." ".$lista2['nazwisko']."</h2>
            <img src='".$lista2['zdjecie']."' alt='$num'>
            <p>Rok urodzenia: ".$lista2['rok_urodzenia']."</p>
            <p>Opis: ".$lista2['opis']."</p>
            <p>Hobby: ".$lista2['nazwa']."</p>";
        }
            mysqli_close($con);
        ?>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: ZAJĄC</p>
    </div>
</body>
</html>