<!doctype html>
<html lang="en">

<head>
	<base href="<?= base_url() ?>">
	<meta charset="UTF-8">
	<title>UTS</title>

</head>


<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Data Tables
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Tables</a></li>
				<li class="active">Data tables</li>
			</ol>
			<section class="content">
				<div class="row">
					<div class="box">
						<div class="box-header">
							<h1>Riwayat Data Mahasiswa</h1>
							<!-- <a href="crud/tampil" class="btn btn-primary">Home</a>

							<a href="crud/tambah" class="btn btn-primary">Tampil data</a> -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>

											<th>ID</th>
											<th>Nim</th>
											<th>Nomer HP Lama</th>
											<th>Nomer HP Baru</th>
											<th>Tanggal di Ubah</th>

										</tr>
									</thead>
									<?php
									foreach ($isi as $k0 => $v0) {
										?>
										<tr>
											<td><?php echo $v0['id'] ?></td>
											<td><?php echo $v0['nim'] ?></td>
											<td><?php echo $v0['no_hp_lama'] ?></td>
											<td><?php echo $v0['no_hp_baru'] ?></td>
											<td><?php echo $v0['tgl_diubah'] ?></td>
										</tr>
									<?php } ?>
								</table>
			</section>
			<section class="content container-fluid">
			</section>
	</div>
	</div>
	</div>
	</section>




</body>