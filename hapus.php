<?php
include ('koneksi.php');

$id = $_GET ['id'];

$query = "DELETE FROM listdata WHERE id='$id'";

if (mysqli_query($koneksi, $query)){
    header("location:index.php");
}
else {
    echo "Data gagal dihapus".mysqli_error($koneksi);
}

?>
