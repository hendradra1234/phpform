<?php
    $arrNilai = array("Nur" => 75, "Agus" => 85, 'Yuyun' => 90);
?>
<html>
    <head>
        <title>UTS DPW Pengolahan Form - Form Array</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Form Array</h1>
        <form action="" method="POST" name="input">
            <label>Input Nama Pertama</label>
            <div class = "form-group">
                <input type="text" name="nama1" placeholder = "Masukkan Nama Pertama"/>
            </div>
            <label>Input Nama Kedua</label>
            <div class = "form-group">
                <input type="text" name="nama2" placeholder = "Masukkan Nama Kedua"/>
            </div>
            <label>Input Nama Ketiga</label>
            <div class = "form-group">
                <input type="text" name="nama3" placeholder = "Masukkan Nama Ketiga"/>
            </div>
            <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="Input" value="Input"/>
            </div>
        </form>
    </body>
</html>
<?php
    if (isset($_POST["Input"])) {
        $nama1 = $_POST["nama1"];
        $nama2 = $_POST["nama2"];
        $nama3 = $_POST["nama3"];

        $nama1Nilai = $arrNilai[$nama1] ?? "<strong>Oops Nilai $nama1 Tidak ada di Database</strong>";
        $nama2Nilai = $arrNilai[$nama2] ?? "<strong>Oops Nilai $nama2 Tidak ada di Database</strong>";
        $nama3Nilai = $arrNilai[$nama3] ?? "<strong>Oops Nilai $nama3 Tidak ada di Database</strong>";

        echo "<h4>HASIL ARRAY</h4>";
        echo "============================<br>";
        echo "
        <p>
            Nilai $nama1 Adalah $nama1Nilai<br>
            Nilai $nama2 Adalah $nama2Nilai<br>
            Nilai $nama3 Adalah $nama3Nilai<br>
        </p>
        ";
    }
?>