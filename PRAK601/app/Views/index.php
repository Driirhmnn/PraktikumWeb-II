<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-color:cornflowerblue ;
        }

        .card {
            width: 50%;
            margin: 100px auto;
        }

        .card-header {
            background-color: midnightblue;
            color: whitesmoke;
        }

        .card-body {
            background-color: lightgray;
        }

        .card table {
            margin: 20px auto;
            width: fit-content;
            z-index: 1;
        }

        .card td {
            width: 50px;
        }
    </style>
</head>

<body>
    <div class="card ">
        <h3 class="card-header" style="text-align: center;">Profil Mahasiswa</h3>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="card-text">
                <table>
                    <tr>
                        <th>Nama</th>
                        <td style="text-align: center;">:</td>
                        <td style="width: fit-content;"><?= $dataNama ?></td>
                    </tr>
                    <tr>
                        <th>NIM</th>
                        <td style="text-align: center;">:</td>
                        <td style="width: fit-content;"><?= $dataNim ?></td>
                    </tr>
                </table>
            </div>
            <center>
                <a class="btn btn-primary" href="/home/biodata" role="button">Lebih Lengkap</a>
            </center>
        </div>
</body>

</html>