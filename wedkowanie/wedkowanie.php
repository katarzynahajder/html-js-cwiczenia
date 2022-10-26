<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="styl2.css" rel="stylesheet" type="text/css">
    <title>Klub wędkowania</title>
</head>
<body>
    <div id="container">
        <div id="banner">
            <h2>Wędkuj z nami!</h2>
        </div>
        <div id="left">
            <img src="rybaa2.jpg" alt="Szczupak">
        </div>
        <div id="right">
            <h3>Ryby spokojnego żeru (białe)</h3>
            <?php
			$con=mysqli_connect("localhost", "root", "", "wedkowanie")or die("Nie połączono z serwerem.");
			$wynik=mysqli_query($con, "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia=2");
            if(mysqli_num_rows($wynik)>0)
            {
                while($r=mysqli_fetch_array($wynik))echo $r['id'].". ".$r['nazwa'].", występuje w: ".$r['wystepowanie']."<br>";
            }
			mysqli_close($con);
			?>
            <ol>
                <li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
                <li><a href="https://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
            </ol>
        </div>
        <div id="footer">
            <p id="nic" style="color: #3CB371; font-size: 1px;">.</p><p>Stronę wykonał: 00000000000000</p>
        </div>
    </div>
</body>
</html>