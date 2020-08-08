<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="<?php echo base_url().'assets/bootstrap.css' ?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <?php $this->load->view('menu'); ?><!-- Include Menu -->
      <div class="container">
        <div class="row">
          <h2>Welcome <?php echo $this->session->userdata('ses_nama'); ?></h2>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url().'assets/js/jquary.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script>

    </script>
  </body>
</html>
