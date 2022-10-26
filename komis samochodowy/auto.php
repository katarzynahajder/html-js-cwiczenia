<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Komis Samochodowy</title>
	<link rel="Stylesheet" href="auto.css" type="text/css">
</head>
<body>
	<div id="baner">
		<h1>SAMOCHODY</h1>
	</div>
	<div id="panel_lewy">
	<h2>Wykaz samochodów</h2>
	<ul>
	<?php
        $con=mysqli_connect("localhost", "root", "", "komis")or die("Nie połączono z serwerem.");
		$wynik=mysqli_query($con, "SELECT * FROM samochody");
        if(mysqli_num_rows($wynik)>0)
        {
			while($r=mysqli_fetch_array($wynik))
			{
				echo "<li>".$r['id']." ".$r['marka']." ".$r['model']."</li>";
			}
		}
		mysqli_close($con);
	?>
	</ul>
	<h2>Zamówienia</h2>
	<ul>
	<?php
		$con=mysqli_connect("localhost", "root", "", "komis")or die("Nie połączono z serwerem.");
		$wynik=mysqli_query($con, "SELECT * FROM zamowienia");
        if(mysqli_num_rows($wynik)>0)
        {
			while($r=mysqli_fetch_array($wynik))
			{
				echo "<li>".$r['Samochody_id']." ".$r['Klient']."</li>";
			}
		}
		mysqli_close($con);
	?>
	</ul>
	</div>
	<div id="panel_prawy">
	<h2>Pełne dane: Fiat</h2>
	<?php
		$con=mysqli_connect("localhost", "root", "", "komis")or die("Nie połączono z serwerem.");
		$wynik=mysqli_query($con, "SELECT * FROM samochody");
        if(mysqli_num_rows($wynik)>0)
        {
			while($r=mysqli_fetch_array($wynik))
			{
				echo $r['id']." / ".$r['marka']." / ".$r['model']." / ".$r['rocznik']." / ".$r['kolor']." / ".$r['stan']."<br>";
			}
		}
		mysqli_close($con);
	?>
	</div>
	<div id="stopka">
		<table>
			<tr>
				<td><a href="kwerendy.txt">Kwerendy</a></td>
				<td>Katarzyna Hajder: 11234556788</td>
				<td><img src="auto.png" alt="komis samochodowy"/></td>
			</tr>
		</table>
	</div>
</body>
</html>