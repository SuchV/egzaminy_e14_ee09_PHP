<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Salon pielęgnacji</title>
    <link rel="stylesheet" href="salon.css">
</head>

<body>
    <section class="banner">
        <h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
    </section>
    <section class="lewy">
        <h3>SALON ZAPRASZA W DNIACH</h3>
        <ul>
            <li>Poniedziałek, 12:00-18:00</li>
            <li>Wtorek, 12:00-18:00</li>
        </ul> 
        <a href="pies.jpg"><img src="pies-mini.jpg"></a>
        <p>Umów się telefonicznie na wizytę lub po prostu przyjdź!</p>
    </section>
    <section class="srodkowy">
        <h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3>
            <?php
                $pol = mysqli_connect("localhost","root","","salon"); 
                $z1=mysqli_query($pol,"SELECT imie, rodzaj, nastepna_wizyta, telefon FROM zwierzeta WHERE nastepna_wizyta!=0");
                while($w1=mysqli_fetch_array($z1)){
                    if ($w1['rodzaj']==1){
                        echo "Pies: ".$w1['imie']."<br>
                        Data następnej wizyty: ".$w1['nastepna_wizyta']."telefon właściciela: ".$w1['telefon']."<br>";
                    }
                    else{
                        echo "Kot: ".$w1['imie']."<br>
                        Data następnej wizyty: ".$w1['nastepna_wizyta']."telefon właściciela: ".$w1['telefon']."<br>";
                    }
                }
            ?>
    </section>
    <section class="prawy">
        <h3>USŁUGI</h3>
            <?php
                $z2=mysqli_query($pol,"SELECT nazwa, cena FROM uslugi");
                while($w2=mysqli_fetch_array($z2)){
                echo $w2['nazwa'].", ".$w2['cena']."<br>";
                }
                mysqli_close($pol); 
            ?>
    </section>
</body>
</html>