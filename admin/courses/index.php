<?php
include "../security.php";
include "../../koneksi.php";

$sql = "select * from courses";
$query = mysqli_query($conn, $sql);
?>

<table border="1" bordercolor="#000" cellspacing="0" cellpadding="10">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
        while($result = mysqli_fetch_array($query)){
            $name = $result['name'];
            $description = $result['description'];
            $price = $result['price'];
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $name ?></td>
            <td><?= $description ?></td>
            <td><?= $price ?></td>
            <td>
                <a href="edit.php?id=<?= $result['id'] ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $result['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>