<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>PRAK401.php</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid;
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="oanjang">Panjang : </label>
        <input type="number" name="panjang" id="panjang">
        <br>
        <label for="lebar">Lebar : </label>
        <input type="number" name="lebar" id="lebar">
        <br>
        <label for="nilai">Nilai : </label>
        <input type="text" name="nilai" id="nilai">
        <br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <br>
    <?php
    $panjang = $lebar = $nilai = "";
    if (isset($_POST['cetak'])) {
        if (isset($_POST['panjang'])) {
            $panjang = $_POST['panjang'];
        }
        if (isset($_POST['lebar'])) {
            $lebar = $_POST['lebar'];
        }
        if (isset($_POST['nilai'])) {
            $nilai = (string)$_POST['nilai'];
        }
        $databaru = explode(" ", $nilai);
        if ($panjang * $lebar < count($databaru)) {
            echo  "Panjang  nilai  tidak  sesuai  dengan  ukuran matriks";
        } else { ?>
            <table cellspacing="0" cellpadding="0">
                <?php
                for ($i = 0; $i < $panjang; $i++) {
                ?>
                    <tr>
                        <?php for ($j = 0; $j < $lebar; $j++) { ?>
                            <td style="text-align: center;">
                                <?php
                                if (empty($databaru[($i * $panjang) + $j])) {
                                    echo 0;
                                } else {
                                    echo $databaru[($i * $panjang) + $j];
                                }
                                ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
    <?php
        }
    }
    ?>
</body>
</html>