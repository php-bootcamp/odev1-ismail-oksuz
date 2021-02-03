<!DOCTYPE html>
<html>
<head>
	<title>Odev-1</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Yaş Aralığı Hesaplama</h2>
	<hr>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
		<table>
			<tr>
				<td><label for="yas">Yaş:</label></td>
				<td><input type="number" id="yas" name="yas" required=""></td>
			</tr>
			<tr>
				<td></td>
				<td align="right">
					<button type="submit" name="yasHesapla">Hesapla</button>
				</td>
			</tr>
		</table>
	</form>

	<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$yas = $_POST['yas'];
		if ($yas >= 0 && $yas <= 14) {
			echo "Çocuk";
		}
		elseif ($yas >= 15 && $yas <= 24) {
			echo "Genç";
		}
		elseif ($yas >= 25 && $yas <= 64) {
			echo "Yetişkin";
		}
		elseif ($yas >= 65) {
			echo "Yaşlı";
		}
		else{
			echo "Hatalı giriş..";
		}
	}
	?>
</body>
</html>