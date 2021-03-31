<?php
// $arr1=['Pemrograman','Website','Kelas B','Semester 4'];
    $login=true;
    $arr_DM=[
        [
            'nama' => 'Surya',
            'nim' => '192410101',
            'umur' => '24',
        ],
            [
            'nama' => 'Dandy',
            'nim' => '192410102',
            'umur' => '23',
        ],
            [
            'nama' => 'Rahman',
            'nim' => '192410103',
            'umur' => '22',
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
</head>
<body>
    <!-- <?php
        $var1='Hellow ';
        $var2='World';
        echo $var1,' ',$var2;

        // echo $arr1;
        echo '<br>';
        foreach($arr1 as $array) {
            echo $array, ' ';
        }
    ?> -->
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Usia</th>            
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr_DM as $arrray_mhs): ?>
                <tr>
                    <td><?php echo $arrray_mhs['nama'] ?></td>
                    <td><?php echo $arrray_mhs['nim'] ?></td>
                    <td><?php echo $arrray_mhs['umur'] ?></td>                
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>