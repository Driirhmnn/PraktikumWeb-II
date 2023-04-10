<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302.php</title>
</head>
<body>
    <form action="" method="post">
        <label for="tinggi">Tinggi: </label>
        <input type="text" name="tinggi" id="inggi">
        <br>
        <label for="gambar">Alamat Gambar: </label>
        <input type="url" name="gambar" id="gambar">
        <br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>
    <?php 
        if (isset($_POST['submit'])) {
            $max = $_POST['tinggi'];
            $i = 1; $j = 1; $k = $max;
            $img = $_POST['gambar'];
        }
    ?>
    <?php if (isset($_POST['submit'])) { ?>
        <?php while ($i <= $max) { ?>
            <?php while($j < $i) { ?>
                <img style="width: 20px; opacity: 0;" src= <?= "$img"; ?> alt="">
                <?php $j++ ?>
            <?php } ?>
            <?php while ($k >= $i) { ?>
                <img style="width: 20px;" src=<?= "$img"; ?> alt="">
                <?php $k-- ?>
            <?php } ?>
            <br>
            <?php 
                $j = 1; $k = $max;
                $i++;
            ?>
        <?php } ?>
    <?php } ?>
</body>
</html>