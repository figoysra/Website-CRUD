!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>

<body>
    <h1 style="text-align: center;">Edit Data</h1>
    <?php
    include('koneksi.php');
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "select * from listdata where id = '$id'");
    $row = mysqli_fetch_assoc($query);
    ?>
    <form method="POST" role="form">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <div class="form-group">
            <label for=" usr">Nama:</label>
            <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" class="form-control" name="jumlah" value="<?= $row['jumlah']; ?>">
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" cols="30" rows="10" class="form-control"><?= $row['keterangan']; ?></textarea>
        </div>
        <button type="submit" name="submit" value="simpan" class="btn btn-primary" >Simpan data</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];

        mysqli_query($koneksi, "UPDATE listdata SET nama='$nama', jumlah='$jumlah' , keterangan='$keterangan' where id ='$id'") or die(mysqli_error($koneksi));
        echo "<script>alert('data berhasil diupdate.');window.location='index.php';</script>";
    }
    ?>
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/popper.js"></script>
    <Script src="asset/js/bootstrap.min.js"></Script>
</body><

</html>
