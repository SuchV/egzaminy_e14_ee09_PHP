<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piłka nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="banner">
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </div>
    <div id="lewy">
        <form method="post">
            <select name="lista" id="lista">
                <option value="1">Bramkarze</option>
                <option value="2">Obrońcy</option>
                <option value="3">Pomocnicy</option>
                <option value="4">Napastnicy</option>
            </select>
            <input type="submit" value="Zobacz">
        </form>
        <img src="zad2.png" alt="piłka">
        <p>Autor: Zając</p>
    </div>
    <div id="prawy">
        <ol>
        <?php
        $con = mysqli_connect("localhost","root","","egzamin");
        @$wybor = $_POST["lista"];
        if(is_null($wybor)){
        }
        else {
            $zap = mysqli_query($con,"SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id=$wybor");
            while($lis = mysqli_fetch_array($zap)) {
                echo "
                <li>".$lis['imie']." ".$lis["nazwisko"]."</li>
                ";
            }
        }
        ?>
        </ol>
    </div>
    <div id="glowny">
        <h3>Liga mistrzów</h3>
    </div>
    <div id="liga">
        <?php
            $zap2 = mysqli_query($con,"SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC");
            while($dyv = mysqli_fetch_array($zap2)) {
                echo "
                <div class='druzyny'>
                    <h2>".$dyv['zespol']."</h2>
                    <h1>".$dyv['punkty']."</h1>
                    <p>grupa: ".$dyv['grupa']."</p>
                </div>
                ";
            }
            $clos = mysqli_close($con);
        ?>
    </div>
</body>
</html>