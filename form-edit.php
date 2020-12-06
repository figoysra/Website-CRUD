<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($db, $sql);
$list = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Produk Arkademy</title>
</head>

<body>
    <header>
        <h3>Formulir Produk Arkademy</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $list['id'] ?>" />

        <p>
            <label for="nama_produk">Nama: </label>
            <input type="text" name="nama_produk"  value="<?php echo $list['nama_produk'] ?>" />
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <textarea name="keterangan"><?php echo $list['keterangan'] ?>"</textarea>
        </p>
        <p>
            <label for="harga">Harga: </label>
            <input type="number" name="harga"  value="<?php echo $list['harga'] ?>" />
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <textarea name="jumlah"><?php echo $list['jumlah'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        </fieldset>


    </form>

    </body>
</html>