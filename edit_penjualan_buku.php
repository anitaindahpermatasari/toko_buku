<?php
include 'header.html';
$id = $_GET['kode_penjualan'];
include 'model.php'; 
$model = new Model();
$data = $model->edit_penjualan_buku($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Penjualan Buku</title>
</head>
<br><br><br><br>
<body>		
	<div class="container-fluid">
		<div class="row">

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/6.png" class="img-fluid" alt="">
	</div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<h1 align="center">Edit Penjualan Buku</h1>
		<a class="btn btn btn-warning" href="penjualan_buku.php">Kembali</a>
		<br><br>
		<form align="center" action="proses.php" method="post">
			<label>Kode Penjualan</label>
			<br>
			<input class="form-control" type="number" name="kode_penjualan" value="<?php echo $data->kode_penjualan ?>">
			<br>
			<label>Kode Buku</label>
			<br>
			<input class="form-control" type="number" name="kode_buku" value="<?php echo $data->kode_buku ?>">
			<br>
			<label>Jumlah Buku</label>
			<br>
			<input class="form-control" type="number" name="jumlah_buku" value="<?php echo $data->jumlah_buku ?>">
			<br>
			<label>Harga Buku Satuan</label>
			<br>
			<input class="form-control" type="number" name="harga_buku_satuan" value="<?php echo $data->harga_buku_satuan ?>">
			<br>
			<label>Pembayaran</label>
			<br>
			<input class="form-control" type="number" name="pembayaran" value="<?php echo $data->pembayaran ?>">
            <br>
			<label>Tanggal Penjualan</label>
			<br>
			<input class="form-control" type="date" name="tanggal_penjualan" value="<?php echo $data->tanggal_penjualan ?>">
            <br><br>
			<button class="btn btn btn-info" type="submit" name="submit_edit_penjualan_buku">Submit</button>
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