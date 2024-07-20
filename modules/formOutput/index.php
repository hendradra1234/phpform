<html>
    <head>
        <title>UTS DPW Pengolahan Form - Form Output</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Form Output</h1>
        <form action="" method="POST" name="input">
            <label>Masukkan Jenis Kendaraan</label>
            <div class = "form-group">
                <input type="text" name="jenis" placeholder = "Masukkan Jenis Kendaraan"/>
            </div>
            <label>Masukkan Biaya Sewa</label>
            <div class = "form-group">
                <input type="text" name="biayasewa" placeholder = "Masukkan Biaya Sewa"/>
            </div>
            <label>Masukkan Jumlah Sewa</label>
            <div class = "form-group">
                <input type="number" name="jmsewa" placeholder = "Masukkan Jumlah Sewa"/>
            </div>
            <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="Input" value="Input"/>
            </div>
        </form>
    </body>
</html>

<?php
    if (isset($_POST["Input"])) {
        $jenis = $_POST["jenis"] ?? 'Data Kosong';
        $biayasewa = $_POST["biayasewa"] ?? 0;
        $jmsewa = $_POST["jmsewa"] ?? 0;

        $totalsewa = $biayasewa * $jmsewa;

        echo "<h4>NOTA PENYEWAAN KENDARAAN</h4>";
        echo "============================<br>";
        echo "
        <p>
            Jenis Kendaraan: <strong>$jenis</strong><br>
            Biaya Sewa: <strong>Rp. $biayasewa Per Hari</strong><br>
            Jumlah Sewa: <strong>$jmsewa Hari</strong><br>
            Total: <strong>Rp. $totalsewa</strong>
        </p>
        ";
    }
?>