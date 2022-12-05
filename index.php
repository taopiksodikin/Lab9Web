<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);

?>
<header>
<?php require('header.php'); ?>
<style>
form div > label {
			    display: inline-block;
			    width: 100px;
			    height: 30px;
}
</style>
</header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>
        <a href="tambah.php?id=<?php.echo.$row['id_barang'];?>">
            Tambah Barang
        </a>
        <br></br>

        <div class="main">
            <table border="1" cellpadding="10" cellspacing="10">
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Katagori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td><img src="gambar/<?= $row['gambar'];?>" alt="<?=
$row['nama'];?>"></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['kategori'];?></td>
                <td><?= $row['harga_beli'];?></td>
                <td><?= $row['harga_jual'];?></td>
                <td><?= $row['stok'];?></td>
                <td><?= $row['id_barang'];?></td>
                <td>
                    <a href="ubah.php?id=<?php.echo.$row['id_barang'];?>">ubah</a>
                    <a href="hapus.php?id=<?.echo.$row['id_barang'];?>"onclick="
                        return confirm('apakah anda yakin ingin menghapus?');">hapus</a>
                </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div>
    </div>
<footer>
    <?php require('footer.php'); ?>
</footer>
</body>
</html>