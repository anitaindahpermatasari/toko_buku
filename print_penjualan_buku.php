<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Penjualan Buku</title>
	<style>
		h1 {
			text-align: center;
		}
		table, 
		td, 
		th {
			border: 1px solid #ddd;
			text-align: left;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, 
		td {
			padding: 15px;
		}
	</style>
</head>
<br><br><br><br>
<body>
	<h1>Laporan Penjualan Buku</h1>
	<table>
		<thead>
			<tr>
                <th>No.</th>
                <th>Kode Penjualan</th>
                <th>Kode Buku</th>
                <th>Jumlah Buku</th>
                <th>Harga Buku Satuan</th>
                <th>Total Harga Buku</th>
                <th>Pembayaran</th>
                <th>Kembalian</th>
                <th>Tanggal Penjualan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_penjualan_buku();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
						<td><?=$index++ ?></td>
                        <td><?=$data->kode_penjualan ?></td>
                        <td><?=$data->kode_buku ?></td>
                        <td><?=$data->jumlah_buku ?></td>
                        <td><?=$data->harga_buku_satuan ?></td>
                        <td><?=$data->total_harga_buku ?></td>
                        <td><?=$data->pembayaran ?></td>
                        <td><?=$data->kembalian ?></td>
                        <td><?=$data->tanggal_penjualan ?></td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel daftar buku.</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>

</html>