<?php
require 'header.php';

//ambil data di URL
$id = $_GET["id"];
// query data mhs berdasarkan id
$ambildata = query("SELECT * FROM buku 
INNER JOIN kategoribuku ON buku.id_kategori = kategoribuku.id_kategori
INNER JOIN rakbuku ON buku.id_rak = rakbuku.id_rak
WHERE buku.id_buku = '$id'")[0];
?>
<title>Detail Buku | Rule Library</title>
<div class="editbook">
    <div class="card mt-3" style="margin-bottom: 90px;">
        <div class="isiEdit">
            <h2 class="mt-3">Detail Buku</h2>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="../assets/img/<?php echo $ambildata['Gambar']; ?>" alt="Gambar Belum Diupload" width="130">
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">ID Kategori</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $ambildata["id_kategori"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">ID Buku</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $ambildata["id_buku"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nama Kategori</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $ambildata["nama_kategori"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Judul Buku</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $ambildata["judul_buku"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Pengarang</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $ambildata["pengarang"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Penerbit</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $ambildata["penerbit"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Tahun Terbit</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $ambildata["thn_terbit"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Jumlah Buku</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $ambildata["jumlah_buku"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Letak Buku</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $ambildata["nama_rak"] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info" href="bukuEdit.php?id=<?= $ambildata['id_buku']; ?>">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require 'footer.php';
    ?>