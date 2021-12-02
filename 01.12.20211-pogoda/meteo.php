<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div class="banlp">
        <p>maj, 2019 r.</p>
    </div>
    <div id="bans">
        <h2>Prognoza dla Poznania</h2>
    </div>
    <div class="banlp">
        <img src="logo.png" alt="prognoza">
    </div>
    <div class="bloklp">
        <a href="kwerendy.txt">Kwerendy</a>
    </div>
    <div class="bloklp">
        <img src="obraz.jpg" alt="Polska, Poznań">
    </div>
    <div id="glowny">
        <table>
            <tr>
                <th>Lp.</th>
                <th>DATA</th>
                <th>NOC - TEMPERATURA</th>
                <th>DZIEŃ - TEMPERATURA</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPA]</th>
            </tr>
            <?php
                $con = mysqli_connect('localhost','root','','prognoza');
                $zap = mysqli_query($con,"SELECT * FROM pogoda WHERE miasta_id='2' ORDER BY data_prognozy DESC");
                $liczba = 0;
                while($tabela = mysqli_fetch_array($zap)) {
                    $liczba++;
                    echo "<tr>
                    <td>".$liczba."</td>
                    <td>".$tabela['data_prognozy']."</td>
                    <td>".$tabela['temperatura_noc']."</td>
                    <td>".$tabela['temperatura_dzien']."</td>
                    <td>".$tabela['opady']."</td>
                    <td>".$tabela['cisnienie']."</td>
                    </tr>";
                }
                mysqli_close($con);
            ?>
        </table>
    </div>
    <div id="stopka">
        <a>Stronę wykonał: ZAJĄC</a>
    </div>
</body>
</html>