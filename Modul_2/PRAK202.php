<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202.php</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

    <?php
    $namaError = $nimError = $jkError = "";
    if (isset($_POST["sumbit"])) {
        if (empty($_POST["nama"])) {
            $namaError = "nama tidak boleh kosong";
        }
        if (empty($_POST["nim"])) {
            $nimError = "nim tidak boleh kosong";
        }
        if (empty($_POST["jk"])) {
            $jkError = "jenis kelamin tidak boleh kosong";
        }
    }
    ?>
    <form action="" method="post">
        Nama: <input type="text" name="nama" value="<?= isset($_POST['nama']) ? $_POST['nama'] : '' ?>">
        <span class="error">* <?php echo $namaError; ?></span><br>
        Nim: <input type="text" name="nim" value="<?= isset($_POST['nim']) ? $_POST['nim'] : '' ?>">
        <span class="error">* <?php echo $nimError; ?></span><br>
        Jenis Kelamin: <span class="error">* <?php echo $jkError; ?></span><br>
        <input type="radio" name="jk" value="Laki-laki" <?php if (isset($_POST["jk"]) and $_POST["jk"] == "Laki-laki") echo "checked"; ?>>Laki-laki<br>
        <input type="radio" name="jk" value="Perempuan" <?php if (isset($_POST["jk"]) and $_POST["jk"] == "Perempuan") echo "checked"; ?>>Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        if (!empty($_POST["nama"]) and !empty($_POST["nim"]) and !empty($_POST["jk"])) {
            echo "<h1>Output: </h1>";
            if (!empty($_POST["nama"])) {
                echo $_POST["nama"] . "<br>";
            }
            if (!empty($_POST["nim"])) {
                echo $_POST["nim"] . "<br>";
            }
            if (!empty($_POST["jk"])) {
                echo $_POST["jk"];
            }
        }
    }
    ?>
</body>

</html>