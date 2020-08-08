<nav class="navbar navbar-fa-inverse">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="bs-example-collapse-1">
        <ul class="nav navbar-nav">
          <!-- akses menu admin -->
          <?php if($this->session->userdata('akses')=='1'): ?>
            <li class="active"><a href="<?php base_url().'index.php/page' ?>"></a>Dashborad</li>
            <li><a href="<?php base_url().'index.php/page/data_mahasiswa'  ?>"></a>Data Mahasiswa</li>
            <li><a href="<?php base_url().'index.php/page/input_nilai' ?>"></a>Input Nilai</li>
            <li><a href="<?php base_url().'index.php/page/input/krs' ?>"></a>KRS</li>
            <li><a href="<?php base_url().'index.php/page/lhs' ?>"></a>LSH</li>
            <!-- Akses Menu dosen -->
          <?php elseif($this->session->userdata('akses')=='2'): ?>
            <li class="active"><a href="<?php base_url().'index.php/page' ?>"></a>Dashboard</li>
            <li><a href="<?php base_url().'index.php/page/data_mahasiswa' ?>"></a>Data Mahasiswa</li>
            <li><a href="<?php base_url().'index.php/page/input_nilai' ?>"></a>Input Mahasiswa</li>
            <!-- Akses menu mahaiswa -->
          <?php else: ?>
            <li class="active"><a href="<?php base_url().'index.php/page' ?>">Dashboard</li>
            <li><a href="<?php base_url().'index.php/page/krs' ?>"></a>KRS</li>
            <li><a href="<?php base_url().'index.php/page/lhs' ?>">LHS</li>
          <?php endif; ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url().'index.php/c_login/logout' ?>">Sign Out</li>
        </ul>
      </div>
    </div>
</nav>
