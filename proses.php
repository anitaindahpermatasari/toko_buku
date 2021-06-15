<?php
include 'model.php';
//tabel buku
if (isset($_POST['submit_simpan_daftar_buku'])) {
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $isbn = $_POST['isbn'];
    $nama_pengarang = $_POST['nama_pengarang'];
    $nama_penerbit = $_POST['nama_penerbit'];
    $jumlah_halaman = $_POST['jumlah_halaman'];
    $edisi_buku = $_POST['edisi_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $rak_buku = $_POST['rak_buku'];
    $stok_awal = $_POST['stok_awal'];
    $harga_pokok = $_POST['harga_pokok'];
    $ppn = $_POST['ppn'];
    $diskon = $_POST['diskon'];
    $model = new Model();
    $model->insert_daftar_buku($kode_buku, $judul_buku, $isbn, $nama_pengarang, $nama_penerbit, $jumlah_halaman, $edisi_buku, $tahun_terbit, $rak_buku, $stok_awal, $harga_pokok, $ppn, $diskon);
    header('location:daftar_buku.php');
}
if (isset($_POST['submit_edit_daftar_buku'])) {
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $isbn = $_POST['isbn'];
    $nama_pengarang = $_POST['nama_pengarang'];
    $nama_penerbit = $_POST['nama_penerbit'];
    $jumlah_halaman = $_POST['jumlah_halaman'];
    $edisi_buku = $_POST['edisi_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $rak_buku = $_POST['rak_buku'];
    $stok_awal = $_POST['stok_awal'];
    $harga_pokok = $_POST['harga_pokok'];
    $ppn = $_POST['ppn'];
    $diskon = $_POST['diskon'];
    $model = new Model();
    $model->update_daftar_buku($kode_buku, $judul_buku, $isbn, $nama_pengarang, $nama_penerbit, $jumlah_halaman, $edisi_buku, $tahun_terbit, $rak_buku, $stok_awal, $harga_pokok, $ppn, $diskon);
    header('location:daftar_buku.php');
}
if (isset($_GET['kode_buku'])) {
    $id = $_GET['kode_buku'];
    $model = new Model();
    $model->delete_daftar_buku($id);
    header('location:daftar_buku.php');
}

//tabel penjualan
if (isset($_POST['submit_simpan_penjualan_buku'])) {
    $kode_penjualan = $_POST['kode_penjualan'];
    $kode_buku = $_POST['kode_buku'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $harga_buku_satuan = $_POST['harga_buku_satuan'];
    $pembayaran = $_POST['pembayaran'];
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $model = new Model();
    $model->insert_penjualan_buku($kode_penjualan, $kode_buku, $jumlah_buku, $harga_buku_satuan, $pembayaran, $tanggal_penjualan);
    header('location:penjualan_buku.php');
}
if (isset($_POST['submit_edit_penjualan_buku'])) {
    $kode_penjualan = $_POST['kode_penjualan'];
    $kode_buku = $_POST['kode_buku'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $harga_buku_satuan = $_POST['harga_buku_satuan'];
    $pembayaran = $_POST['pembayaran'];
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $model = new Model();
    $model->update_penjualan_buku($kode_penjualan, $kode_buku, $jumlah_buku, $harga_buku_satuan, $pembayaran, $tanggal_penjualan);
    header('location:penjualan_buku.php');
}
if (isset($_GET['kode_penjualan'])) {
    $id = $_GET['kode_penjualan'];
    $model = new Model();
    $model->delete_penjualan_buku($id);
    header('location:penjualan_buku.php');
}