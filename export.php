<?php 
    include "Exe-file/koneksi.php";

    $query_table = mysqli_query($mysqli, "SELECT 
                                            barang.id_barang, 
                                            barang.nama_barang, 
                                            jenis_barang.jenis, 
                                            COALESCE(masuk.total_masuk, 0) AS total_barang_masuk, 
                                            COALESCE(keluar.total_keluar, 0) AS total_barang_keluar, 
                                            barang.stok, 
                                            lokasi_penyimpanan.nama_lokasi 
                                        FROM 
                                            barang
                                        LEFT JOIN 
                                            (SELECT id_barang, SUM(jumlah_barang) AS total_masuk 
                                            FROM barang_masuk 
                                            GROUP BY id_barang) masuk ON barang.id_barang = masuk.id_barang
                                        LEFT JOIN 
                                            (SELECT id_barang, SUM(jumlah_barang) AS total_keluar 
                                            FROM barang_keluar 
                                            GROUP BY id_barang) keluar ON barang.id_barang = keluar.id_barang
                                        LEFT JOIN 
                                            jenis_barang ON barang.id_jenisbarang = jenis_barang.id_jenisbarang 
                                        LEFT JOIN 
                                            lokasi_penyimpanan ON barang.id_lokasi = lokasi_penyimpanan.id_lokasi;");

$filename = "laporan inventaris barang" . date('Ymd') . ".xls";

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Barang.xls");
?>


<table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stock In</th>
            <th>Stock Out</th>
            <th>Stock Akhir</th>
            <th>Lokasi Barang</th>
        </tr>
    </thead>
    <tbody>
        <?php while($result = mysqli_fetch_assoc($query_table)) { ?>
        <tr>
            <td><?= $result['id_barang'] ?></td>
            <td><?= $result['nama_barang'] ?></td>
            <td><?= $result['jenis'] ?></td>
            <td><?= $result['total_barang_masuk'] ?></td>
            <td><?= $result['total_barang_keluar'] ?></td>
            <td><?= $result['stok'] ?></td>
            <td><?= $result['nama_lokasi'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
