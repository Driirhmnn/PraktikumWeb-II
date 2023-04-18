<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK402.php</title>
    <style>
        tr {
            border: black;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    $data =
        [
            [
                "nama" => "Andi",
                "nim" => "2101001",
                "uts" => 87,
                "uas" => 65
            ],
            [
                "nama" => "Budi",
                "nim" => "2101002",
                "uts" => 76,
                "uas" => 79
            ],
            [
                "nama" => "Tono",
                "nim" => "2101003",
                "uts" => 50,
                "uas" => 41
            ],
            [
                "nama" => "Jessica",
                "nim" => "2101004",
                "uts" => 60,
                "uas" => 75
            ]
        ];
    foreach ($data as $key => $value) {
        $uts = $value['uts'];
        $uas = $value['uas'];
        $data[$key]['rerata'] = ($uts * 0.4) + ($uas * 0.6);
        if ($data[$key]['rerata'] >= 80) {
            $data[$key]['huruf'] = 'A';
        } elseif ($data[$key]['rerata'] >= 70) {
            $data[$key]['huruf'] = 'B';
        } elseif ($data[$key]['rerata'] >= 60) {
            $data[$key]['huruf'] = 'C';
        } elseif ($data[$key]['rerata'] >= 50) {
            $data[$key]['huruf'] = 'D';
        } else {
            $data[$key]['huruf'] = 'E';
        }
    }
    ?>
    <table border="1" ,cellspacing="0" cellpadding="5">
        <tr bgcolor="CCCDCC">
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php foreach ($data  as $a) { ?>
            <tr>
                <td><?php echo $a["nama"]; ?></td>
                <td><?php echo $a["nim"]; ?></td>
                <td><?php echo $a["uts"]; ?></td>
                <td><?php echo $a["uas"]; ?></td>
                <td><?php echo $a["rerata"]; ?></td>
                <td><?php echo $a["huruf"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>