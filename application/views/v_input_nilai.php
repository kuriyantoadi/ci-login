<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="<?php base_url().'assets/css/bootsrap.css' ?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <?php $this->load->view('menu'); ?>
      <div class="col-md-12">
        <div class="row">
          <h2>Laporan hasil Studi</h2>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>Sks</th>
                <th>Niali</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MK0001</td>
                <td>Bahasa Pemrograman I</td>
                <td>2</td>
                <td><button class="btn btn-info btn-xs">Input Nilai</button></td>
              </tr>
              <tr>
                <td>MK0002</td>
                <td>Web I</td>
                <td>2</td>
                <td><button class="btn btn-info btn-xs">Input Nilai</button></td>
              </tr>
              <tr>
                <td>MK0003</td>
                <td>Algoritma II</td>
                <td>2</td>
                <td><button class="btn btn-info btn-xs">Input Nilai</button></td>
              </tr>
              <tr>
                <td>MK0004</td>
                <td>Bahasa Inggris I</td>
                <td>2</td>
                <td><button class="btn btn-info btn-xs">Input Nilai</button></td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>

    <script="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
    <script="<?php echo base_url().'/assets/js/bootstrap.min.js' ?>"></script>
  </body>
</html>
