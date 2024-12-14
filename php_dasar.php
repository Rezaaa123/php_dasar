
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Muhammad reza</title>
    <style>
        table {
            width: 400px;
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
        // Berikut adalah data pribadi dalam variabel PHP
        $nama = "Muhammad Reza A";
        $jenis_kelamin = "Laki-laki";
        $umur = 23;
        $berat = 50;
        $tinggi = 167
    ?>
    
    <table>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: <?php echo $umur; ?></td>
        </tr>
        <tr>
            <td>Berat</td>
            <td>: <?php echo $berat; ?> kg</td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>: <?php echo $tinggi; ?> cm</td>
        </tr>
    </table>
</body>
</html>



