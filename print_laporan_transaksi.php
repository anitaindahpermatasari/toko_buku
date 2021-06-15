<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Laporan Transaksi</title>
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
	<h1>Laporan Transaksi</h1>
	<table>
		<thead>
			<tr>
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
                <th>Kode Penjualan</th>
                <th>Jumlah Buku</th>
                <th>Total Harga Buku</th>
                <th>Pembayaran</th>
                <th>Kembalian</th>
                <th>Tanggal Penjualan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_laporan_transaksi();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
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
                        <td><?=$data->kode_penjualan ?></td>
                        <td><?=$data->jumlah_buku ?></td>
                        <td><?=$data->total_harga_buku ?></td>
                        <td><?=$data->pembayaran ?></td>
                        <td><?=$data->kembalian ?></td>
                        <td><?=$data->tanggal_penjualan ?></td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="21">Belum ada data pada tabel laporan transaksi.</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>

</html>