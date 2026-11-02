<?php
	$preu = 10;
	$IVA=21;
	if (empty($_GET['ingr'])) {
		$pvp=((100+$IVA)/100)*$preu;
		echo "Has demanat només la pizza bàsica. El preu és $pvp € (IVA inclòs)<br>";
	}
	else {
		$pvp=((100+$IVA)/100)*($preu+count($_GET['ingr']));
		echo "Has demanat la pizza bàsica amb:<br> ";
		foreach ($_GET['ingr'] as $ingredient) {
			if ($ingredient) {
				echo "* $ingredient<br>";
			}
		}
		echo "El preu és $pvp € (IVA inclòs)<br>";
	}
	echo '<a href=pizza.html>Torna a pizza.html</a>';
?>
