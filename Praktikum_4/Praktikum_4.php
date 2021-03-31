<?php
	require 'Praktikum_Tabung.php';

	// var_dump{$_POST};
	// if (isset($_POST['submited'])){
	// 	if(strlen($_POST['diameter'])>0){
	// 		echo "masukkan";
	// 	} else {
	//         echo "Isi diameter terlebih dahulu";
	//     	}
	// 	}
	// if (isset($_POST['submit_btn'])) {
	//         if (strlen($_POST['diameter']) > 0) {
	//             echo "login !";
	//         } else {
	//             echo "Isi diameter terlebih dahulu";
	//         }
	//     }

	// $luas = 0;
	// $volume = 0;
	$tabung = new Tabung;
	if (isset($_POST['submited'])){
		$tabung->setDiameter($_POST['diameter']);
		$tabung->setTinggi($_POST['tinggi']);
	}

	// if (isset($_POST['submited'])){
	// 	$diameter = $_POST['diameter'];
	// 	$tinggi = $_POST['tinggi'];
	// 	$r = $diameter/2;

	// 	$luas = 3.14 * $diameter * $tinggi;
	// 	$volume = 3.14 * $r * $r * $tinggi;

	// 	echo "Diameter Tabung = $diameter <br/>";
	// 	echo "Tinggi Tabung = $tinggi <br/>";
	// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
	<!-- <form action="" method="post">
		<input type="text" name="diameter">
		<button name=submited>Kirim</button>		
	</form> -->

    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='submited'>Hitung</button>
    </form>

    <hr>

    <ul>
        <!-- <li>Luas Sisi : <?= $luas ?></li>
        <li>Volume : <?= $volume ?></li> -->
        <li>Luas Selimut : <?php echo $tabung->hitungluas()?></li>
    </ul>
</body>
</html>