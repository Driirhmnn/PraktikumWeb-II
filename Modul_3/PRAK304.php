<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304.php</title>
</head>

<body>
    <?php
    $bintang = NULL;
    $img = "<img style='width: 50px;' src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png' >";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bintang = $_POST['bintang'];
    }
    if (isset($_POST['tambah'])) {
        $bintang += 1;
    }
    if (isset($_POST['kurang'])) {
        $bintang -= 1;
    }
    if (empty($bintang)) { ?>
        <form action="" method="post">
            <label for="bintang">Jumlah bintang: </label>
            <input type="text" name="bintang"> </br>
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php } ?>
    <?php if (!empty($bintang)) {
        echo "Jumlah Bintang : $bintang "; ?>
        <br><br>
        <?php for ($i = 0; $i < $bintang; $i++) {
            echo "$img";
        } ?>
        <form action="" method="post">
            <input type="hidden" name="bintang" value="<?= $bintang ?>">
            <button type="submit" name="tambah" value="tambah">tambah</button>
            <button type="submit" name="kurang" value="kurang">kurang</button>
        </form>
    <?php } ?>
</body>

</html>