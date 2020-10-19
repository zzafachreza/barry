

<div class="container">

	<center>
		<h3>Pengaturan User</h3>
		<hr/>
	</center>

	<form method="POST" action="update_user">
		<table class="table table-bordered">
		<tr>
			<th>USERNAME</th>
			<td>
				<input type="hidden" name="id" class="form-control" value="<?php echo $_SESSION['id'] ?>">
				<input type="text" name="username" class="form-control" value="<?php echo $_SESSION['username'] ?>">
			</td>
		</tr>
		<tr>
			<th>NIP</th>
			<td>
				<input type="text" name="nip" class="form-control" value="<?php echo $_SESSION['nip'] ?>">
			</td>
		</tr>
		<tr>
			<th>NAMA LENGKAP</th>
			<td>
				<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $_SESSION['nama_lengkap'] ?>">
			</td>
		</tr>
			<tr>
			<th>PASSWORD</th>
			<td>
				<input type="password" name="password" class="form-control" placeholder="kosongkan jika tidak diubah">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button class="btn btn-success">SIMPAN PERUBAHAN</button>
			</td>
		</tr>
	</table>
	</form>
	
</div>