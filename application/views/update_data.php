<!doctype html>
<html lang="en">

<head>
	<base href="<?= base_url() ?>">
	<meta charset="UTF-8">
</head>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Data Tables
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="box">
				<div class="box-header">
	<?php echo "<h3>" . $judul . "</h3>"; ?>

	<form method="post" action="<?php echo base_url('crud/update') ?>" enctype="multipart/form-data">
		<table>
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<div class="form-group row">
				<label for="Nim" class="col-sm-2 col-form-label">NIM </label>
				<div class="col-sm-10">
				<input type="text" name="nim" class="form-control" value="<?php echo $nim ?>"></td>
			</div>
		</div>

		<div class="form-group row">
				<label for="Nama" class="col-sm-2 col-form-label">Nama </label>
				<div class="col-sm-10">
				<input type="text" name="nama_mhs" class="form-control" value="<?php echo $nama_mhs ?>"></td>
			</div>
		</div>

		<fieldset class="form-group">
							<div class="row">
								<label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin </label>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="jenis_kelamin" value="L" <?php echo $jenis_kelamin == 'L' ?'checked' :''?>>
										<label class="form-check-label" for="l">
											Laki -Laki
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="jenis_kelamin" value="P" <?php echo $jenis_kelamin == 'P' ?'checked' :'' ?>>
										<label class="form-check-label" for="p">
											Perempuan
										</label>
									</div>
								</div>
							</div>
						</fieldset>

			<div class="form-group row">
				<label for="Alamat" class="col-sm-2 col-form-label">Alamat </label>
				<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control" value="<?php echo $alamat ?>"></td>
			</div>
		</div>

		<div class="form-group row">
				<label for="nomer" class="col-sm-2 col-form-label">Nomer HP </label>
				<div class="col-sm-10">
				<input type="text" name="no_hp" class="form-control" value="<?php echo $no_hp ?>"></td>
			</div>
		</div>

		<div class="form-group row">
							<div class="col-sm-12">
								<button type="submit" name="simpan" value="Update" class="btn btn-primary">Simpan</button>
								<a href="<?php echo base_url() . "crud/tampil"; ?>"><input type="button" value="Batal" class="btn btn-primary" value="Batal"></a>
							</div>
			</tr>
		</table>
	</form>
</div>
</div>
</section>
</div>