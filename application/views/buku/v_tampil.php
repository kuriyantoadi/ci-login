<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container">
      <h2><center>Tampil Data Buku</center></h2>
      <br>
      <a href="<?php echo base_url('index.php/C_buku/input'); ?>" class="btn btn-primary">Tambah</a>
      <a href="<?php echo base_url().'index.php/c_login/logout' ?>">Sign Out</a><br><br>
      <table class="table table-bordered">
        <tr>
          <th><center>No</th>
          <th><center>Judul</th>
          <th><center>Pengarang</th>
          <th><center>Tahun Terbit</th>
          <th><center>Edit</th>
          <th><center>Hapus</th>
        </tr>
        <?php
          $no=1;
          foreach ($buku as $row) {
              ?>
        <tr>
          <td><center><?php echo $no++; ?></td>
          <td><?php echo $row->judul; ?></td>
          <td><?php echo $row->pengarang; ?></td>
          <td><?php echo $row->tahun_terbit ?></td>
          <td><center><a href="<?php echo site_url('C_buku/e/'.$row->id_buku); ?>" class="btn btn-sm btn-info">Edit</a></td>
          <td><center><a href="<?php echo site_url('C_buku/hapus/'.$row->id_buku); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin menhapus data ini ?')">Hapus</a></td>
        </tr>
      <?php echo form_close();
          } ?>
      </table>
    </div>

  </body>
</html>
