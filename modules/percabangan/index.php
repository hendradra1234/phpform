<html>
    <head>
        <title>UTS DPW Pengolahan Form - Percabangan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Percabangan</h1>
        <form action="" method="POST" name="input">
            <label>Input NIM</label>
            <div class = "form-group">
                <input type="text" name="nim" placeholder = "Masukkan nim anda"/>
            </div>
            <label>Input Nama</label>
            <div class = "form-group">
                <input type="text" name="nama" placeholder = "Masukkan nama anda"/>
            </div>
            <label>Input Berat badan</label>
            <div class = "form-group">
                <input type="number" name="bb" placeholder = "Masukkan berat badan anda"/>
            </div>
            <div class = "form-group">
                <input class = "secondary-button" type="submit" name="Input" value="Input"/>
            </div>
        </form>
    </body>
</html>
<?php
    if (isset($_POST["Input"])) {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $bb = $_POST["bb"];

        $category = '';

        if ($bb >= 70) {
            $category = 'Gemuk';
        } elseif ($bb >= 40 && $bb <= 69) {
            $category = 'Sedang';
        } elseif ($bb <= 0) {
            $category = 'Berat badan tidak valid (pastikan di range di atas angka minus)';
        } else {
            $category = 'Kecil';
        }
        echo "<p>
        NIM: $nim<br>
        Nama: $nama<br>
        Berat anda: $bb Kg<br>
        kategori Badan: $category<br>
        </p>";
    }
?>