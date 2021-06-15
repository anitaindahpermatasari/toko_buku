<!doctype html>
<html lang="en">
<?php
include 'header.html';
?>

<head>
	<title>Tambah Penjualan Buku</title>
</head>
<br><br><br><br>
<body>	
	<div class="container-fluid">
		<div class="row">

	<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
    	<img src="assets/img/4.png" class="img-fluid" alt="">
	</div>

	<div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Tambah Penjualan Buku</h1>
		<a class="btn btn btn-warning" href="penjualan_buku.php">Kembali</a>
		<br><br>
		<form align="center" action="proses.php" method="post">
			<label>Kode Penjualan</label>
			<br>
			<input class="form-control" type="number" name="kode_penjualan">
			<br>
			<label>Kode Buku</label>
			<br>
			<input class="form-control" type="number" name="kode_buku">
			<br>
			<label>Jumlah Buku</label>
			<br>
			<input class="form-control" type="number" name="jumlah_buku">
			<br>
			<label>Harga Buku Satuan</label>
			<br>
			<input class="form-control" type="number" name="harga_buku_satuan">
			<br>
			<label>Pembayaran</label>
			<br>
			<input class="form-control" type="number" name="pembayaran">
            <br>
			<label>Tanggal Penjualan</label>
			<br>
			<input class="form-control" type="date" name="tanggal_penjualan">
            <br><br>
			<button class="btn btn btn-info" type="submit" name="submit_simpan_penjualan_buku">Submit</button>
			<button class="btn btn btn-danger" type="reset">Reset</button>
		</form>
			<div data-aos="fade-up" data-aos-delay="600">
       			<div class="text-center text-lg-start">
				
				</div>
			</div>
	</div>
	<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>

		</div>
	</div>	
</body>
<?php
include 'footer.html';
?>
</html>