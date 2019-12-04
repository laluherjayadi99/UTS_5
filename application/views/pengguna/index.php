<h1 class="text-center">PENGGUNA</h1>
<div class="container">
<a href="<?= base_url()?>pengguna/tambah"><button class="btn btn-info" title="tambah pengguna">
<i class="fa fa-plus"></i>
<i class="fa fa-user"></i>
</button></a>
<a href="#"><button class="btn btn-success"><i class="fa fa-exel">Export</i></button></a>
<table class="table text-center">
  <thead class="bg-success">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Depan</th>
      <th scope="col">Nama_Belakang</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Level</th>
      <th scope="col">Foto</th>     
      <th scope="col">Aksi</th>     
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($pengguna as $row){
    $no=1;
  ?>
    <tr>
      <th><?= $no++;?></th>
      <td><?= $row['nama_depan']; ?></td>
      <td><?= $row['nama_belakang']; ?></td>
      <td><?= $row['email'];?></td>
      <td><?= $row['username']?></td>
      <td><?= $row['password']?></td>
      <td><?= $row['level'];?></td>
      <td><?= $row['photo']?></td>
      <td>
      <a href="<?= base_url(); ?>pengguna/hapus/<?= $row['id']; ?>"><button class="btn btn-danger" title="hapus data" onclick="return confirm('yakin akan di Menghapus Data');"><i class="fa fa-trash"></i></button></a>
      <a href="<?= base_url(); ?>pengguna/edit/<?= $row['id']; ?>"><button class="btn btn-primary" title="ubah data"><i class="fa fa-pen"></i></button></a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>