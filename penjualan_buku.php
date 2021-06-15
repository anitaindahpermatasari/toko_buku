<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Penjualan Buku</title>
</head>
<br><br><br><br>
<body align="center">
	<div align="center" class="container-fluid">
		<h1>Penjualan Buku</h1>
		<a href="create_penjualan_buku.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_penjualan_buku.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table align="center" class="table table-striped" border=1>
			<thead align="center">
				<tr align="center" style="background-color:pink;">
                    <th>No.</th>
                    <th>Kode Penjualan</th>
                    <th>Kode Buku</th>
                    <th>Jumlah Buku</th>
                    <th>Harga Buku Satuan</th>
                    <th>Total Harga Buku</th>
                    <th>Pembayaran</th>
                    <th>Kembalian</th>
                    <th>Tanggal Penjualan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_penjualan_buku();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
						<tr style="background-color:pink;">
                            <td><?=$index++ ?></td>
                            <td><?=$data->kode_penjualan ?></td>
                            <td><?=$data->kode_buku ?></td>
                            <td><?=$data->jumlah_buku ?></td>
                            <td><?=$data->harga_buku_satuan ?></td>
                            <td><?=$data->total_harga_buku ?></td>
                            <td><?=$data->pembayaran ?></td>
                            <td><?=$data->kembalian ?></td>
                            <td><?=$data->tanggal_penjualan ?></td>
							<td>
								<a name="edit" id="edit" class="btn btn btn-warning" href="edit_penjualan_buku.php?kode_penjualan=<?=$data->kode_penjualan ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn btn-danger" href="proses.php?kode_penjualan=<?=$data->kode_penjualan ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="10">Belum ada data pada tabel penjualan buku.</td>
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