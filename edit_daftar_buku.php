<?php
include 'header.html';
$id = $_GET['kode_buku'];
include 'model.php'; 
$model = new Model();
$data = $model->edit_daftar_buku($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Daftar Buku</title>
</head>
<br><br><br><br>
<body>		
	<div class="container-fluid">
		<div class="row">

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/5.png" class="img-fluid" alt="">
	</div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<h1 align="center">Edit Daftar Buku</h1>
		<a class="btn btn btn-warning" href="daftar_buku.php">Kembali</a>
		<br><br>
		<form align="center" action="proses.php" method="post">
			<label>Kode Buku</label>
			<br>
			<input class="form-control" type="number" name="kode_buku" value="<?php echo $data->kode_buku ?>">
			<br>
			<label>Judul Buku</label>
			<br>
			<input class="form-control" type="text" name="judul_buku" value="<?php echo $data->judul_buku ?>">
			<br>
			<label>ISBN</label>
			<br>
			<input class="form-control" type="number" name="isbn" value="<?php echo $data->isbn ?>">
			<br>
			<label>Nama Pengarang</label>
			<br>
			<input class="form-control" type="text" name="nama_pengarang" value="<?php echo $data->nama_pengarang ?>">
			<br>
			<label>Nama Penerbit</label>
			<br>
			<input class="form-control" type="text" name="nama_penerbit" value="<?php echo $data->nama_penerbit ?>">
            <br>
			<label>Jumlah Halaman</label>
			<br>
			<input class="form-control" type="number" name="jumlah_halaman" value="<?php echo $data->jumlah_halaman ?>">
            <br>
			<label>Edisi Buku</label>
			<br>
			<input class="form-control" type="number" name="edisi_buku" value="<?php echo $data->edisi_buku ?>">
            <br>
			<label>Tahun Terbit</label>
			<br>
			<input class="form-control" type="year" name="tahun_terbit" value="<?php echo $data->tahun_terbit ?>">
            <br>
			<label>Rak Buku</label>
			<br>
			<input class="form-control" type="text" name="rak_buku" value="<?php echo $data->rak_buku ?>">
            <br>
			<label>Stok Awal</label>
			<br>
			<input class="form-control" type="number" name="stok_awal" value="<?php echo $data->stok_awal ?>">
            <br>
			<label>Harga Pokok</label>
			<br>
			<input class="form-control" type="number" name="harga_pokok" value="<?php echo $data->harga_pokok ?>">
            <br>
			<label>PPN</label>
			<br>
			<input class="form-control" type="number" name="ppn" value="<?php echo $data->ppn ?>">
            <br>
			<label>Diskon</label>
			<br>
			<input class="form-control" type="number" name="diskon" value="<?php echo $data->diskon ?>">
			<br><br>
			<button class="btn btn btn-info" type="submit" name="submit_edit_daftar_buku">Submit</button>
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