<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container my-5">
    <div class="row">
        <div class="col banner">
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </div>
    <div class=" col-md-12 dane">
        <h3>ARCHIWUM WYCIECZEK</h3>
        <?php
            $con = mysqli_connect('localhost','root','','egzamin4');
            $sql = mysqli_query($con,'SELECT  id, cel, cena FROM wycieczki WHERE dostepna=0;');
            while($wys = mysqli_fetch_array($sql)) {
                echo "<p>".$wys['id'].". ".$wys['cel'].", cena: ".$wys['cena']."</p>";
            }
            ?>
    </div>
    <div class="col-md-3 lewy">
        <h3>NATJANIEJ...</h3>
        <table>
            <tr>
                <td>Włochy</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Francja</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Hiszpania</td>
                <td>od 1400 zł</td>
            </tr>
        </table>
    </div>
    <div class="col-md-6 srod">
        <h3>TU BYLIŚMY</h3>
        <div class="row">
            <?php
                $sql2 = mysqli_query($con,'SELECT nazwaPliku, podpis FROM zdjecia GROUP BY podpis DESC;');
                while($wys2 = mysqli_fetch_array($sql2)) {
                    echo "<div class='col-md-4'><img src='zdjecia/".$wys2['nazwaPliku']."' alt=".$wys2['podpis']."></img></div>";
                }
                mysqli_close($con);
            ?>
        </div>
    </div>
    <div class="col-md-3 prawy">
        <h3>SKONTAKTUJ SIĘ</h3>
        <a href="mailto: wycieczki@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>
    <div class="col-md-12 stopka">
        <p>Stronę wykonał: ZAJĄC</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" 
    integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" 
     crossorigin="anonymous">
     </script>
    <script src="js/bootstrap.js"></script>
    <div>
</body>
</html>