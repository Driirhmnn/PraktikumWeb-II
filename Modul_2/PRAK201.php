<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK201.php</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <label for="nama1">Nama: 1</label>
            <input type="text" id="nama1" name="nama1" placeholder="Masukkan nama"><br>
        </div>
        <div>
            <label for="nama2">Nama: 2</label>
            <input type="text" id="nama2" name="nama2" placeholder="Masukkan nama"><br>
        </div>
        <div>
            <label for=" nama3">Nama: 3</label>
            <input type="text" id="nama3" name="nama3" placeholder="Masukkan nama"><br>
        </div>

        <input type="submit" value="Urutkan" name="button">
    </form>
    <?php
    if (isset($_REQUEST['nama1']) and isset($_REQUEST['nama2']) and isset($_REQUEST['nama3'])) {
        $nama1 = $_POST["nama1"];
        $nama2 = $_POST["nama2"];
        $nama3 = $_POST["nama3"];

        $input = array("$nama1", "$nama2", "$nama3");
        sort($input);

        $urut = count($input);
        for ($x = 0; $x < $urut; $x++) {
            echo $input[$x];
            echo "<br>";
        }
    }
    ?>
</body>

</html>