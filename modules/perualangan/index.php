<html>
    <head>
        <title>UTS DPW Pengolahan Form< - Perualangan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Perualangan</h1>
        <form action="" method="POST" name="input">
            <label>Nama Anda</label>
            <div class = "form-group">
                <input type="text" name="nama" placeholder = "Masukkan nama anda"/>
            </div>
            <button type="submit" name="Input" value="Input">Submit</button>
        </form>
    </body>
</html>
<?php
    if (isset($_POST["Input"])) {
        $nama= $_POST["nama"];
        echo "Nama Anda : <b>$nama</b>";
    }
?>