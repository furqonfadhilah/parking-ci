<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= $title?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
            
            <div class="col-md-3"></div>
            <div class="col-md-6">

            <div class="panel panel-default">
              <div class="panel-body">
                    <div class="text-center">
                      <h2 class="text-center">Tiket Parkir</h2>
                      <p>ID PARKIR : <?= $print['id_parkir']?></p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 text-right" style="border-right: 1px solid #000;">
                          <p>Nomor Kendaraan</p>
                          <h3><?= $print['no_kendaraan']?></h3>
                          <br>
                          <p>Tanggal</p>
                          <h3><?= $print['tanggal']?></h3>
                        </div>
                        <div class="col-md-6 text-left">
                          <p>Jenis Kendaraan</p>
                          <h3><?= $print['jenis_kendaraan']?></h3>
                          <br>
                          <p>Waktu Masuk</p>
                          <h3><?= $print['waktu_masuk']?> WIB</h3>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                          <p class="text-center">JANGAN MENINGGALKAN TIKET &<br> BARANG BERHARGA<br> DI DALAM KENDARAAN ANDA</p>
                      </div>
                    </div>
              </div>
            </div>

            </div>
            <div class="row text-center">
              <div class="col-md-12">
              <br>
                <a href="<?= base_url()?>dashboard" class="btn btn-primary btn-lg" name="upload">Print</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->