<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="tabel.js"></script>
    <title>Daftar Peminjaman Buku | Rule Library</title>
</head>

<body>
    <?php
    include 'headertabel.php';
    ?>
    <div class="tabeladmin">
        <div class="card">
            <div class="isitabeladmin">
                <h3>Daftar Peminjaman Buku</h3>
                <hr>
                <a class="btn btn-danger" style="width: 210px;" href="riwayatpinjamTambah.php" role="button">Tambah Data Peminjam</a>
                <hr>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Peminjaman</th>
                            <th>Nama Peminjam</th>
                            <th>Kelas</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // include '../koneksi.php';
                        $no = 0;
                        $ambildata = mysqli_query($koneksi, "SELECT * FROM riwayatpinjam ORDER BY id_pinjam DESC");
                        ?>
                        <?php
                        while ($row = mysqli_fetch_assoc($ambildata)) {
                            $no++;
                        ?>
                            <tr>
                                <td scope="row"><?php echo $no; ?></td>
                                <td><?php echo $row["id_pinjam"] ?></td>
                                <td><?php echo $row["nama_peminjam"] ?></td>
                                <td><?php echo $row["kelas_peminjam"] ?></td>
                                <td><?php echo $row["judul_buku"] ?></td>
                                <td><?php echo $row["tgl_pinjam"] ?></td>
                                <td class="col-3">
                                    <a class="btn btn-primary" href="riwayatpinjamDetail.php?id=<?= $row['id_pinjam']; ?>" role="button">Detail</a>&nbsp;
                                    <a class="btn btn-success" href="riwayatpinjamEdit1.php?id=<?= $row['id_pinjam']; ?>" role="button">Edit</a>
                                    <a class="btn btn-danger" href="riwayatpinjamHapus.php?id=<?= $row['id_pinjam']; ?>" role="button">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <nav class="navbar fixed-bottom navbar-light bg-light">
        <a class="navbar-brand" href="#">Copyright @Muhammad Fadhil AY</a>
    </nav>
</body>

</html>