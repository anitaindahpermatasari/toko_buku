<?php
include 'connection.php';
class Model extends Connection
{
	public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    //tabel buku
	public function insert_daftar_buku($kode_buku, $judul_buku, $isbn, $nama_pengarang, $nama_penerbit, $jumlah_halaman, $edisi_buku, $tahun_terbit, $rak_buku, $stok_awal, $harga_pokok, $ppn, $diskon)
	{
	    $harga_jual = $this->harga_jual($harga_pokok, $ppn, $diskon);
	    $sql = "INSERT INTO tabel_buku(kode_buku, judul_buku, isbn, nama_pengarang, nama_penerbit, jumlah_halaman, edisi_buku, tahun_terbit, rak_buku, stok_awal, harga_pokok, ppn, diskon, harga_jual) VALUES ('$kode_buku', '$judul_buku', '$isbn', '$nama_pengarang', '$nama_penerbit', '$jumlah_halaman', '$edisi_buku', '$tahun_terbit', '$rak_buku', '$stok_awal', '$harga_pokok', '$ppn', '$diskon', '$harga_jual')";
	    $this->conn->query($sql);
	}
	public function harga_jual($harga_pokok, $ppn, $diskon)
	{
	    $harga_jual= ($harga_pokok)+($harga_pokok*($ppn/100))-($harga_pokok*($diskon/100));
	    return $harga_jual;
	}
	public function tampil_daftar_buku()
	{
	    $sql = "SELECT * FROM tabel_buku";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
		}
	}
	public function edit_daftar_buku($kode_buku)
	{
	    $sql = "SELECT * FROM tabel_buku WHERE kode_buku='$kode_buku'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_daftar_buku($kode_buku, $judul_buku, $isbn, $nama_pengarang, $nama_penerbit, $jumlah_halaman, $edisi_buku, $tahun_terbit, $rak_buku, $stok_awal, $harga_pokok, $ppn, $diskon)
	{
	    $harga_jual = $this->harga_jual($harga_pokok, $ppn, $diskon);
	    $sql = "UPDATE tabel_buku SET judul_buku='$judul_buku', isbn='$isbn', nama_pengarang='$nama_pengarang', nama_penerbit='$nama_penerbit', jumlah_halaman='$jumlah_halaman' , edisi_buku='$edisi_buku', tahun_terbit='$tahun_terbit', rak_buku='$rak_buku', stok_awal='$stok_awal', harga_pokok='$harga_pokok', ppn='$ppn', diskon='$diskon', harga_jual='$harga_jual' WHERE kode_buku='$kode_buku'";
	    $this->conn->query($sql);
	}
	public function delete_daftar_buku($kode_buku)
	{
	    $sql = "DELETE FROM tabel_buku WHERE kode_buku='$kode_buku '";
	    $this->conn->query($sql);
	}
	//tabel penjualan
	public function insert_penjualan_buku($kode_penjualan, $kode_buku, $jumlah_buku, $harga_buku_satuan, $pembayaran, $tanggal_penjualan)
	{
		$total_harga_buku = $this->total_harga_buku($jumlah_buku, $harga_buku_satuan);
        $kembalian = $this->kembalian($total_harga_buku, $pembayaran);
		$sql = "INSERT INTO tabel_buku(harga_jual) VALUES ('$harga_jual')";
	    $this->conn->query($sql);
		$sql = "INSERT INTO tabel_penjualan(kode_penjualan, kode_buku, jumlah_buku, harga_buku_satuan, total_harga_buku, pembayaran, kembalian, tanggal_penjualan) VALUES ('$kode_penjualan', '$kode_buku', '$jumlah_buku', '$harga_buku_satuan', '$total_harga_buku', '$pembayaran', '$kembalian', '$tanggal_penjualan')";
		$this->conn->query($sql);
	}
    public function total_harga_buku($jumlah_buku, $harga_buku_satuan)
	{
	    $total_harga_buku= ($jumlah_buku)*($harga_buku_satuan);
	    return $total_harga_buku;
	}
    public function kembalian($total_harga_buku, $pembayaran)
	{
	    $kembalian= ($pembayaran)-($total_harga_buku);
	    return $kembalian;
	}
	public function tampil_penjualan_buku()
	{
	    $sql = "SELECT * FROM tabel_penjualan";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_penjualan_buku($kode_penjualan)
	{
	    $sql = "SELECT * FROM tabel_penjualan WHERE kode_penjualan='$kode_penjualan'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_penjualan_buku($kode_penjualan, $kode_buku, $jumlah_buku, $harga_buku_satuan, $pembayaran, $tanggal_penjualan)
	{
		$total_harga_buku = $this->total_harga_buku($jumlah_buku, $harga_buku_satuan);
        $kembalian = $this->kembalian($total_harga_buku, $pembayaran);
		$sql = "UPDATE tabel_buku SET harga_jual='$harga_jual'";
	    $this->conn->query($sql);
		$sql = "UPDATE tabel_penjualan SET kode_buku='$kode_buku', jumlah_buku='$jumlah_buku', harga_buku_satuan='$harga_buku_satuan', pembayaran='$pembayaran', tanggal_penjualan='$tanggal_penjualan' WHERE kode_penjualan='$kode_penjualan'";
	    $this->conn->query($sql);
	}
	public function delete_penjualan_buku($kode_penjualan)
	{
	    $sql = "DELETE FROM tabel_penjualan WHERE kode_penjualan='$kode_penjualan'";
	    $this->conn->query($sql);
	}
	//tabel laporan transaksi
	public function tampil_laporan_transaksi()
	{
	    $sql = "SELECT tabel_buku.*, kode_penjualan, jumlah_buku, total_harga_buku, pembayaran, kembalian, tanggal_penjualan FROM tabel_buku INNER JOIN tabel_penjualan ON tabel_buku.kode_buku = tabel_penjualan.kode_buku"; 
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
		}
	}
}
?>