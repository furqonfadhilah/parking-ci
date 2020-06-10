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

            <table class="table table-bordered table-condensed">
              <tr>
                <th width="180px"><h4>Keterangan</h4></th>
                <td><h4><?= $parkir['no_kendaraan']?></h4></td>
              </tr>
              <tr>
                <th width="180px"><h4>Nomor Kendaraan</h4></th>
                <td><h4><?= $parkir['no_kendaraan']?></h4></td>
              </tr>
              <tr>
                <th><h4>Jenis Kendaraan</h4></th>
                <td><h4><?= $parkir['jenis_kendaraan']?></h4></td>
              </tr>
              <tr>
                <th><h4>Tanggal</h4></th>
                <td><h4><?= $parkir['tanggal']?></h4></td>
              </tr>
              <tr rowspan="2">
                <th>
                  <h4>Waktu Masuk</h4>
                  <h4>Waktu Keluar</h4>
                </th>
                <td>
                  <h4><?= $parkir['waktu_masuk']?> WIB</h4>
                  <h4><?= $parkir['waktu_keluar']?> WIB</h4>
                </td>
              </tr>
              <tr>
                <th><h4>Biaya Parkir</h4></th>
                <td>
                  <h4>Rp <?= number_format($parkir['biaya'],0,'.','.')?>,-</h4>
                </td>
              </tr>
            </table>
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