<div class="container">
	<div class="col-6 bg-light mx-auto">
    <h3 class="text-center mt-2">Tambah Pengguna</h3>
    <?php foreach($pengguna as $u){ ?>
		<form action="<?php echo base_url(). 'pengguna/update'; ?>" method="post">
			<div class="form-group">
				<label for="nama_depan">Nama_Depan</label>
                <input type="hidden" name="id" value="<?php echo $u->id ?>">
				<input type="text" name="nama_depan" class="form-control"  value="<?php echo $u->nama_depan ?>">
			</div>
			<div class="form-group">
				<label for="Nama_Belakang">Nama_Belakang</label>
				<input type="text" name="nama_belakang" class="form-control"  value="<?php echo $u->nama_belakang ?>">
			</div>
			<div class="form-group">
				<label for="Email">Email</label>
				<input type="email" name="email" class="form-control"  value="<?php echo $u->email ?>">
			</div>
			<div class="form-group">
				<label for="Username">Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $u->username ?>">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="text" name="password" class="form-control" value="<?php echo $u->password ?>">
			</div>
			<div class="form-group">
				<label for="Level">Level</label>
				<input type="text" name="level" class="form-control" value="<?php echo $u->level ?>">
			</div>
			<div class="form-group">
				<label for="Photo">Photo</label>
				<input type="text"name="photo" class="form-control" value="<?php echo $u->photo ?>">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
			</div>
			<br>
			</form>
    <?php }?>
		</div>
</div>
<br>
