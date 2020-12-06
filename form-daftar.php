<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <header>
        <h3>Formulir Produk</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama_produk">Nama: </label>
            <input type="text" name="nama_produk"/>
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <textarea name="keterangan"></textarea>
        </p>
        <p>
            <label for="harga">Harga </label>
            <input type="number" name="harga" />
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <textarea name="jumlah"></textarea>
        </p>
        <p>
            <input type="submit" value="daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>