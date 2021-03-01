<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>

<body>
    <h1 style="text-align: center;">Data Produk <a href="tambah.php">+</a></h1>
    <table class="table table-dark">.
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("koneksi.php");
            $query = mysqli_query($koneksi, "select * from listdata");
            $no = 1;
            while ($row = mysqli_fetch_assoc($query)) {
            ?>

                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['jumlah'] ?></td>
                    <td><?= $row['keterangan'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row["id"] ?>" class="btn btn-sm btn-warning"> edit</a>
                        <a href="hapus.php?id=<?= $row["id"] ?>" class="btn btn-sm btn-danger"> Hapus</a>
                    </td>
                </tr>
            <?php $no++;
            } ?>
        </tbody>
    </table>
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/popper.js"></script>
    <Script src="asset/js/bootstrap.min.js"></Script>
</body>

</html>
