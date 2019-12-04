<div class="container">
	<div class="col-6 bg-light mx-auto">
    <h3 class="text-center mt-2">Tambah Pengguna</h3>
		<form action="<?php echo base_url(). 'pengguna/tambah_aksi'; ?>" method="post">
			<div class="form-group">
				<label for="nama_depan">Nama_Depan</label>
				<input type="text" name="nama_depan" class="form-control" id="nama_depan"  placeholder="Nama_Depan">
			</div>
			<div class="form-group">
				<label for="Nama_Belakang">Nama_Belakang</label>
				<input type="text" name="nama_belakang" class="form-control" id="Nama_Belakang"  placeholder="Nama_Belakang">
			</div>
			<div class="form-group">
				<label for="Email">Email</label>
				<input type="email" name="email" class="form-control" id="Email"  placeholder="Email">
			</div>
			<div class="form-group">
				<label for="Username">Username</label>
				<input type="text" name="username" class="form-control" id="Username"  placeholder="Username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="text" name="password" class="form-control" id="password" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="Level">Level</label>
				<input type="text" name="level" class="form-control" id="Level" placeholder="Level">
			</div>
			<div class="form-group">
				<label for="Photo">Photo</label>
				<input type="text"name="photo" class="form-control" id="Photo" placeholder="Photo">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
				<button class="btn btn-danger">Batal</button>
			</div>
			<br>
			</form>
		</div>
</div>
<br>
