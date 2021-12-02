<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
 </head>
<body>
    <div class="ban12">
        <h2>MÓJ ORGANIZER</h2>
    </div>
    <div class="ban12">
        <form method="POST">
            Wpis wydarzenia:
            <input type="text" name="wpis">
            <button type="submit" name="submit">ZAPISZ</button>
        </form>
        <?php
            $con = mysqli_connect('localhost','root','','egzamin6');
            if(isset($_POST['submit'])) {
            $dane = $_POST['wpis'];
            mysqli_query($con,"UPDATE zadania SET wpis='$dane' WHERE dataZadania='2020-08-27'");
        }
        ?>
    </div>
    <div id="ban3">
        <img src="logo2.png" alt="Mój organizer">
    </div>
    <div id="main">
        <?php
            $zap1 = mysqli_query($con,"SELECT dataZadania, miesiac, wpis FROM zadania where miesiac='sierpien'");
            while($lista=mysqli_fetch_array($zap1)) {
                echo "<div class='dane'>
                <h6>".$lista['dataZadania'].",".$lista['miesiac']."</h6>
                <p>".$lista['wpis']."</p>
                </div>";
            }
        ?>
    </div>
    <div id="stopka">
        <?php
            $zap2 = mysqli_query($con,"SELECT miesiac, rok FROM zadania WHERE dataZadania='2020-08-01'");
            while($lista2=mysqli_fetch_array($zap2)){
            echo "<h1>miesiąc: ".$lista2['miesiac']." rok: ".$lista2['rok']."</h1>";
        }
            mysqli_close($con);
        ?>
        <p>Stronę wykonał: ZAJĄC</p>
    </div>
</body>
</html>