<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card{
            border: 2px solid black;
        }

        .card table {
            width: fit-content;
        }

        .card th {
            width: 23%;
        }

        .fancy {
            background-color: transparent;
            border: 2px solid #000;
            border-radius: 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            /* float: right; */
            font-weight: 700;
            letter-spacing: 0.05em;
            margin: 0;
            outline: none;
            overflow: visible;
            padding: 1.25em 2em;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-transform: none;
            transition: all 0.3s ease-in-out;
            user-select: none;
            font-size: 13px;
        }

        .fancy::before {
            content: " ";
            width: 1.5625rem;
            height: 2px;
            background: black;
            top: 50%;
            left: 1.5em;
            position: absolute;
            transform: translateY(-50%);
            transform-origin: center;
            transition: background 0.3s linear, width 0.3s linear;
        }

        .fancy .text {
            font-size: 1.125em;
            line-height: 1.33333em;
            padding-left: 2em;
            display: block;
            text-align: left;
            transition: all 0.3s ease-in-out;
            text-transform: uppercase;
            text-decoration: none;
            color: black;
        }

        .fancy .top-key {
            height: 2px;
            width: 1.5625rem;
            top: -2px;
            left: 0.625rem;
            position: absolute;
            background: #e8e8e8;
            transition: width 0.5s ease-out, left 0.3s ease-out;
        }

        .fancy .bottom-key-1 {
            height: 2px;
            width: 1.5625rem;
            right: 1.875rem;
            bottom: -2px;
            position: absolute;
            background: #e8e8e8;
            transition: width 0.5s ease-out, right 0.3s ease-out;
        }

        .fancy .bottom-key-2 {
            height: 2px;
            width: 0.625rem;
            right: 0.625rem;
            bottom: -2px;
            position: absolute;
            background: #e8e8e8;
            transition: width 0.5s ease-out, right 0.3s ease-out;
        }

        .fancy:hover {
            color: white;
            background: black;
        }

        .fancy:hover::before {
            width: 0.9375rem;
            background: white;
        }

        .fancy:hover .text {
            color: white;
            padding-left: 1.5em;
        }

        .fancy:hover .top-key {
            left: -2px;
            width: 0px;
        }

        .fancy:hover .bottom-key-1,
        .fancy:hover .bottom-key-2 {
            right: 0;
            width: 0;
        }
    </style>
</head>

<?php
$imageUrl = "https://i.postimg.cc/cLvMBQPb/2022-05-10-084936969.jpg";
?>

<body>
    <div class="card mb-3 mx-auto mt-2" style="max-width: 60%;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= $imageUrl ?>" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="card-title">Biodata Mahasiswa</h1>
                    <table class="table table-borderless card-text">
                        <tr>
                            <th>Nama Lengkap</th>
                            <td>:</td>
                            <td><?= $dataNama ?></td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>:</td>
                            <td><?= $dataNim ?></td>
                        </tr>
                        <tr>
                            <th>Prodi</th>
                            <td>:</td>
                            <td><?= $dataProdi ?></td>
                        </tr>
                        <tr>
                            <th>Hobi</th>
                            <td>:</td>
                            <td><?= $dataHobi ?></td>
                        </tr>
                        <tr>
                            <th>Skill</th>
                            <td>:</td>
                            <td><?= $dataSkill ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td><?= $dataAlamat ?></td>
                        </tr>
                        <tr>
                            <th>Motto Hidup</th>
                            <td>:</td>
                            <td><?= $dataMotto ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <center>
        <a class="fancy" href="/home/index">
            <span class="top-key"></span>
            <span class="text">Kembali</span>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
        </a>
    </center>
</body>

</html>