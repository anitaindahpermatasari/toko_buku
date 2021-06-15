<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Daftar Buku</title>
</head>
<br><br><br><br>
<body align="center">
	<div align="center" class="container-fluid">
		<h1>Daftar Buku</h1>
		<a href="create_daftar_buku.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_daftar_buku.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table align="center" class="table table-striped" border=1>
			<thead align="center">
				<tr align="center" style="background-color:aqua;">
                    <th>No.</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>ISBN</th>
                    <th>Nama Pengarang</th>
                    <th>Nama Penerbit</th>
                    <th>Jumlah Halaman</th>
                    <th>Edisi Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Rak Buku</th>
                    <th>Stok Awal</th>
                    <th>Harga Pokok</th>
                    <th>PPN</th>
                    <th>Diskon</th>
					<th>Harga Jual</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_daftar_buku();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
						<tr style="background-color:aqua;">
                            <td><?=$index++ ?></td>
                            <td><?=$data->kode_buku ?></td>
                            <td><?=$data->judul_buku ?></td>
                            <td><?=$data->isbn ?></td>
                            <td><?=$data->nama_pengarang ?></td>
                            <td><?=$data->nama_penerbit ?></td>
                            <td><?=$data->jumlah_halaman ?></td>
                            <td><?=$data->edisi_buku ?></td>
                            <td><?=$data->tahun_terbit ?></td>
                            <td><?=$data->rak_buku ?></td>
                            <td><?=$data->stok_awal ?></td>
                            <td><?=$data->harga_pokok ?></td>
                            <td><?=$data->ppn ?></td>
                            <td><?=$data->diskon ?></td>
							<td><?=$data->harga_jual ?></td>
							<td>
								<a name="edit" id="edit" class="btn btn btn-warning" href="edit_daftar_buku.php?kode_buku=<?=$data->kode_buku ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn btn-danger" href="proses.php?kode_buku=<?=$data->kode_buku ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="16">Belum ada data pada tabel daftar buku.</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
<?php
include 'footer.html';
?>
</html>