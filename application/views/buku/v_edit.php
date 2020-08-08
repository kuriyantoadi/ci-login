<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
      <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h2 class="page_header">Edit Buku</h2>
          <?php foreach ($data_buku as $row) {
    echo form_open('C_buku/edit'); ?>
              <tr>
                <td>Judul</td>
                <td>
                  <input type="hidden" name="id_buku" value="<?php echo $row->id_buku; ?>">
                  <input type="text" class="form-control" name="judul" value="<?php echo $row->judul; ?>" placeholder="Judul Buku">
                </td>
              </tr>
              <tr>
                <td>Pengarang</td>
                <td>
                  <input type="text" class="form-control" name="pengarang" value="<?php echo $row->pengarang; ?>" placeholder="Pengarang Buku">
                </td>
              </tr>
              <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" class="form-control" name="tahun_terbit" value="<?php echo $row->tahun_terbit ?>" placeholder="Tahun Terbit"></td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <br><button class="btn btn-danger" type="submit" value="simpan">Simpan</button>
                </td>
              </tr>
              <?php echo form_close();
} ?>
        </div>
      </div>
    </div>
    </body>
    </html>
