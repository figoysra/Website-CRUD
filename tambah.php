<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <h4 style="text-align: center;">Tambah Data</h4>
    <form method="post" role="form">
        <div class="form-group">
            <label for="usr">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div>
            <label for="jumlah"> Jumlah</label>
            <input type="text" name="jumlah" class="form-control">
        </div>
        <div>
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" name="submit" value="simpan" class="btn btn-dark">Simpan Data</button>
    </form>
    <?php
    include('koneksi.php');
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];

        $query = mysqli_query($koneksi, "insert into listdata (nama,jumlah,keterangan) values('$nama','$jumlah','$keterangan')") or die(mysqli_error($koneksi));
        echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
    }
    ?>
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/popper.js"></script>
    <Script src="asset/js/bootstrap.min.js"></Script>
</body>

</html>
