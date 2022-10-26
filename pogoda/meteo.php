<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="styl4.css" rel="stylesheet" type="text/css">
	<title>Prognoza pogody Poznań</title>
</head>
<body>
	<div id="baner_l">
		<p>maj, 2019r.</p>
	</div>
	<div id="baner_s">
		<h2>Prognoza dla Poznania</h2>
	</div>
	<div id="baner_p">
		<img src="logo.png" alt="prognoza">
	</div>
	<div id="blok_l">
		<a href="kwerendy.txt">Kwerendy</a>
	</div>
	<div id="blok_p">
		<img src="obraz.jpg" alt="Polska, Poznań">
	</div>
	<div id="blok_g">
		<table>
			<td class="naglowek">Lp</td>
			<td class="naglowek">DATA</td>
			<td class="naglowek">NOC - TEMPERATURA</td>
			<td class="naglowek">DZIEŃ - TEMPERATURA</td>
			<td class="naglowek">OPADY[mm/h]</td>
			<td class="naglowek">CIŚNIENIE[hPa]</td>
			<?php
				$con=mysqli_connect("localhost", "root", "", "prognoza")or die("Nie połączono z serwerem.");
				$wynik=mysqli_query($con, "SELECT * FROM pogoda");
				$lp=0;
				if(mysqli_num_rows($wynik)>0)
				{
					while($r=mysqli_fetch_array($wynik))
					{
						$lp++;
						echo "<tr>";
						echo "<td>$lp</td>";
						echo "<td>".$r['data_prognozy']."</td>";
						echo "<td>".$r['temperatura_noc']."</td>";
						echo "<td>".$r['temperatura_dzien']."</td>";
						echo "<td>".$r['opady']."</td>";
						echo "<td>".$r['cisnienie']."</td>";
					}
				}
				mysqli_close($con);
			?>
		</table>
	</div>
	<div id="stopka">
		<p>Stronę wykonał: 00000000000000</p>
	</div>
</body>
</html>