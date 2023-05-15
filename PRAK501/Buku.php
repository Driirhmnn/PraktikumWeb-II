<?php 
require('model.php');
if (isset($_GET['id_buku'])){
    hapusbuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buku Perpus</title>
    <style>
        body { 
            width: 900px;
            margin:auto;}
        table{
            border-collapse: collapse;
        }
        tr{
            border: black;
        }
        th{
            background-color: #a0a0a0;
        }
        td{
            background-color: #E8E8E8;
        }
    </style>
</head>
<body >
<h2 style = "text-align:center;">Buku</h2>
    <table border = "1">
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilbuku();
            ?>
        </tbody>
    </table>
    <br></br>
    <a href="formbuku.php"><button>Tambah Buku</button></a> <br></br>
    <a href="index.php"><img src="gambar/house.png" alt="" height="50"width="50"></a>
    <a href="Member.php"><img src="gambar/team.png" alt="" height = "70" width = "75"></a>
    <a href="Peminjaman.php"><img src="gambar/borrow.png" alt="" height ="70"width = "70"></a>
    </div>
</body>
</html>