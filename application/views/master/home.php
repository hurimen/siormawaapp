 <div id="page-wrapper">
  <div class="container-fluid">
    <div class="row bg-title">
      <div class="col-lg-12">
        <h4 class="page-title">Sistem Informasi Manajemen Ormawa</h4>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>assets">Dashboard</a></li>
          <li class="active">Halaman dashboard</li>
        </ol>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <div class="white-box">
          <h3>Selamat datang <?php echo $this->session->userdata('username')['nama']; ?></h3>
        </div>
      </div>
    </div>

    <?php 
    $id = $this->session->userdata('username')['id'];
    if (in_array($this->session->userdata('username')['level'], array(4))) {
      $filter = "AND id_user = '".$id."'";
    }else{  
      $filter = "";
    }

    $total = $this->db->query("SELECT * FROM tb_proposal")->num_rows();
    $dikirim = $this->db->query("SELECT * FROM tb_proposal WHERE status='1' $filter")->num_rows();
    $ditolak = $this->db->query("SELECT * FROM tb_proposal WHERE status='2' $filter")->num_rows();
    $disetujui = $this->db->query("SELECT * FROM tb_proposal WHERE status='3' $filter")->num_rows();
    ?>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-3 col-xs-12 col-sm-6">
        <div class="white-box">
          <div class="text-left">
            <h2 class="m-b-0 m-t-0 counter"><?php echo $total; ?></h2>
            <p class="text-muted m-b-25">Total Proposal</p>
            <div class="chart-box">
              <a href="<?php echo base_url(); ?>proposal" class="btn btn-primary btn-block">Lihat</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 col-sm-6">
        <div class="white-box">
          <div class="text-left">
            <h2 class="m-b-0 m-t-0 counter"><?php echo $dikirim; ?></h2>
            <p class="text-muted m-b-25">Total Proposal Dikirim</p>
            <div class="chart-box">
              <a href="<?php echo base_url(); ?>proposal" class="btn btn-success btn-block">Lihat</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 col-sm-6">
        <div class="white-box">
          <div class="text-left">
            <h2 class="m-b-0 m-t-0 counter"><?php echo $disetujui; ?></h2>
            <p class="text-muted m-b-25">Total Proposal disetujui</p>
            <div class="chart-box">
              <a href="<?php echo base_url(); ?>proposal" class="btn btn-warning btn-block">Lihat</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 col-sm-6">
        <div class="white-box">
          <div class="text-left">
            <h2 class="m-b-0 m-t-0 counter"><?php echo $ditolak; ?></h2>
            <p class="text-muted m-b-25">Total Proposal ditolak</p>
            <div class="chart-box">
              <a href="<?php echo base_url(); ?>proposal" class="btn btn-info btn-block">Lihat</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>