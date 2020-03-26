<html>
    <head>
        <title></title>
    </head>
    <body>
       <h1>Saya adalah <?php echo $this->session->userdata("nama"); ?></h1>
        <a href="<?php echo base_url('index.php/c_login/logout'); ?>">Logout</a>
    </body>
</html>
