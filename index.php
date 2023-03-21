<?php
$datasemuasiswa=[
    [
        "namadepan" => "merten",
        "namabelakang" => "tenouye",
        "alamatjalan" => "btn graha permata permai",
        "alamatkelurahan" => "dobonsolo",
        "ttl"=> "wamena, 19 mei 20**",
    ],
    [
        "namadepan" => "merten",
        "namabelakang" => "tenouye",
        "alamatjalan" => "btn graha permata permai",
        "alamatkelurahan" => "dobonsolo",
        "ttl"=> "wamena, 19 mei 20**",
    ],
    [
        "namadepan" => "merten",
        "namabelakang" => "tenouye",
        "alamatjalan" => "btn graha permata permai",
        "alamatkelurahan" => "dobonsolo",
        "ttl"=> "wamena, 19 mei 20**",
    ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 02</title>
</head>
<body>
    <table>
        <tr>
            <td>No</td>
            <td>Nama Lengkap</td>
            <td>Alamat </td>
           
            <td>TTL</td>
        </tr>
        <?php $i=0; foreach($datasemuasiswa as $dss): ?>
        <tr>
       
            <td><?php echo ++$i?></td>
            <td><?= $dss['namadepan']. ' '.$dss['namabelakang']?></td>
            <td><?= $dss['alamatjalan']. ' '.$dss['alamatkelurahan']?></td>
            <td><?= $dss['ttl']?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>