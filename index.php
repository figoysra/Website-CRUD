<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama_produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Kondisi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($db, $sql);

        while($list = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$list['id']."</td>";
            echo "<td>".$list['nama_produk']."</td>";
            echo "<td>".$list['keterangan']."</td>";
            echo "<td>".$list['harga']."</td>";
            echo "<td>".$list['jumlah']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$list['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$list['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>