<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Welcome to CodeIgniter</title>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
      <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h2 class="page_header">Tambahkan Buku Baru</h2>
              <?php echo form_open('C_buku/tambah'); ?>
              <tr>
                <td>Judul</td>
                <td>
                  <input type="text" class="form-control" name="judul" placeholder="Judul Buku">
                </td>
              </tr>
              <tr>
                <td>Pengarang</td>
                <td>
                  <input type="text" class="form-control" name="pengarang" value="" placeholder="Pengarang Buku">
                </td>
              </tr>
              <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" class="form-control" name="tahun_terbit" value="" placeholder="Tahun Terbit"></td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <br><button class="btn btn-danger" type="submit" value="simpan">Simpan</button>
                </td>
              </tr>
              <?php echo form_close(); ?>
        </div>
      </div>
    </div>
    </body>
    </html>
