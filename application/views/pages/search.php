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

              <?php if($this->session->flashdata()):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Data Parkir <strong>Berhasil!</strong> <?= $this->session->flashdata('flash')?>.
                </div>
              <?php endif; ?>

              <?= form_open('')?>
              <div class="row">
               <div class="col-lg-3"></div>
               <div class="form-group">
                  <div class="col-md-6">
                  <h2 class="text-center">Masukan Nomor Kendaraan</h2>
                    <input type="text" placeholder="Write here.." class="form-control input-lg" name="keyword" autocomplete="off">
                    <br>
                    <center><button class="btn btn-primary btn-md" name="cari" type="submit">Cari</button> - <a href="<?= base_url()?>search" class="btn btn-primary btn-md">Clear</a></center>
                  </div>
                </div>
              <div class="col-lg-3"></div>
              </div>
              <?= form_close()?>

              <br>
              <br>

              <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-md-6">
                  <?php if(!empty($parkir)){ ?>
                    <div class="panel panel-default">
                      <div class="panel-body">
                          <?php foreach ($parkir as $data) :?>
                            <center><h2>Data Parkir</h2></center>
                            <table class="table">
                            </table>
                            <?= form_open('search/prosesData')?>
                            <div class="form-group">
                              <div class="col-md-6">
                              <label class="control-label"><h3>Nomor Kendaraan</h3></label>
                                <input type="text" placeholder="Write here.." class="form-control" readonly name="no_kendaraan" value="<?= $data['no_kendaraan']?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-6">
                              <label class="control-label"><h3>Jenis Kendaraan</h3></label>
                                <input type="text" placeholder="Write here.." class="form-control" readonly name="jenis_kendaraan" value="<?= $data['jenis_kendaraan']?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-6">
                              <label class="control-label"><h3>Tanggal</h3></label>
                                <input type="text" readonly class="form-control" name="tanggal" value="<?= $data['tanggal']?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-6">
                              <label class="control-label"><h3>Waktu Masuk</h3></label>
                                <input type="text" readonly class="form-control" name="waktu_masuk" value="<?= $data['waktu_masuk']?>">
                              </div>
                            </div>
                            <div class="col-md-12">
                                <center><button class="btn btn-primary btn-md" type="submit" style="margin-top: 20px;">Proses</button></center>
                              </div>
                                <input type="hidden" name="waktu_keluar" readonly value="<?= date('H:i:s')?>">
                                <input type="hidden" name="biaya" readonly value="<?php if($data['jenis_kendaraan'] == 'Motor'){echo '2000';}else{echo '5000';};?>">
                                <input type="hidden" name="status" readonly value="Keluar">
                                <input type="hidden" name="id_parkir" readonly value="<?= $data['id_parkir']?>">
                          <?= form_close()?>
                          <?php endforeach; ?>
                      </div>                      
                  <?php } ?>
                </div>
              </div>
              <br>
              <br>
              </div>

            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
