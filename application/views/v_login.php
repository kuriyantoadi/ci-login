<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="=width=device-width, initial-scale=1.0">
    <title></title>
    <link href="<?php echo base_url().'assets/css/bootstrap.css' ?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?php echo base_url().'index.php/c_login/auth' ?>" method="post">
            <h2 class="form-singin-heading">Please Sign</h2>
            <?php echo $this->session->flashdata('msg'); ?>
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" id="username" placeholder="username" class="form-control" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
            <button type="submit" class="btn btn-lg btn-primary  btn-block" name="button">Login</button>
          </form>
        </div>

    </div>
    <script src="<?php base_url().'/assets/js/jquary.js' ?>"> </script>
    <script src="<?php base_url().'/assets/js/bootstrp.min.js' ?>"></script>
  </body>
</html>
