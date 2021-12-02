<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div id="banner1">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div id="banner2">
        <table>
            <tr>
                <td>Kryminał</td>
                <td>Horror</td>
                <td>Przygodowy</td>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </div>
    <div class="filmy">
        <h3>Polecamy</h3>
        <?php
            $con = mysqli_connect('localhost','root','','dane3');
            $zap1 = mysqli_query($con,"SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18, 22, 23, 25) ");
            while($list1=mysqli_fetch_array($zap1)) {
                echo "<div class='bloks'><h4>".$list1['id'].". ".$list1['nazwa']."</h4>
                <img src='".$list1['zdjecie']."' alt='film'>
                <p>".$list1['opis']."</p></div>";
            }
        ?>
    </div>
    <div class="filmy">
        <h3>Filmy fantastyczne</h3>
        <?php
            $zap2 = mysqli_query($con,"SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12");
            while($list2=mysqli_fetch_array($zap2)) {
                echo "<div class='bloks'><h4>".$list2['id'].". ".$list2['nazwa']."</h4>
                <img src='".$list2['zdjecie']."' alt='film'>
                <p>".$list2['opis']."</p></div>";
            }
        ?>   
    </div>
    <div id="stopka">
        <form method="post">
            <label for="num">Usuń film nr.:</label>
            <input type="number" name="num" id="num">
            <button type="submit" name="submit">Usuń film</button>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $numer = $_POST['num'];
                $zap3 = mysqli_query($con,"DELETE FROM produkty WHERE produkty.id=$numer");
                echo '<meta http-equiv="refresh" content="0">';
            }
            else {}
            mysqli_close($con);
        ?>
        <p>Stronę wykonał: <a href="mailto:ja@poczta.com">ZAJĄC</a></p>
    </div>
</body>
</html>