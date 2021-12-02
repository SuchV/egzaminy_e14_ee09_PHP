<!DOCTYPE HTML>
<html>
<head>
	 <meta charset="utf-8">
	 <title>Przychodnia</title>
	 <link rel="stylesheet" href="przychodnia.css">
</head>
<body>
	<div id="baner">
		<h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
	</div>
	<div id="lewy">
	<h3>LISTA PACJENTÓW</h3>
	 <?php
		$p = mysqli_connect('localhost','root','','przychodnia');
		$sql1="SELECT id, imie, nazwisko FROM pacjenci";
		$z1=mysqli_query($p,$sql1);
		while($w1=mysqli_fetch_array($z1)){
		echo $w1['id']." ".$w1['imie']." ".$w1['nazwisko']."<br>";	
		}
	 ?>
	<br><br>
	<form action="pacjent.php" method="POST">
		Podaj id:<br>
		<input type="number" name="numerek">
		<input type="submit" value="Pokaż dane">
	</form>
	<h3>LEKARZE</h3>
	<ul>
		<li>pn - śr
			<ol>
				<li>Anna Kwiatkowska</li>
				<li>Jan Kowalewski</li>
			</ol>
		</li>
		<li>czw - pt
			<ol>
				<li>Krzysztof Nowak</li>
			</ol>
		</li>
	</ul>
	</div>
	 <div id="prawy">
			<h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
			<p>Brak wybranego pacjenta</p>
	 </div>
	 <div id="stopka">
		<p>Utworzone przez: Mikołaj Zając</p>
		<a href="kwerendy.txt" download>Pobierz plik z kwerendami</a>
	 </div>
</body>
</html>