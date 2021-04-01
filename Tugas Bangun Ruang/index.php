<?php
	require 'Bola.php';


	$bola = new Bola;
    $bola -> SetDiameter(20);
	// if (isset($_POST['submited'])){
	// 	$kubus->SetPanjangSisi($_POST['panjang_sisi']);
	// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101057</title>
</head>
<body>
	<h3>Dimas Agung Priambodo</h3>
	<h1>Bangun Ruang : Bola</h1>
<!--     <form action="" method="POST">
        <label for="">Panjang Sisi</label>
        <input type="text" name="panjang_sisi"> <br>
        <button name='submited'>Hitung</button>
    </form>
    <hr> -->
    <ul>
        <li>Jari-jari Bola : <?php echo $bola->Getjarijari() ?></li>
        <li>Diameter Bola : <?php echo $bola->GetDiameter() ?></li>
        <li>Luas Permukaan Bola : <?php echo $bola->GetLuasPermukaanBola() ?></li>
        <li>Volume Bola : <?php echo $bola->GetVolumeBola() ?></li>
    </ul>
</body>
</html>