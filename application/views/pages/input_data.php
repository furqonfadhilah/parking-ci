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
              <?php if($this->session->flashdata()):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Data Parkir <strong>Berhasil!</strong> <?= $this->session->flashdata('flash')?>.
                </div>
              <?php endif; ?>
              
              <?= form_open('input/inputData')?>
                <div class="row">
                <div class="form-group">
                  <label class="control-label"><h3>Nomor Kendaraan</h3></label>
                    <input type="text" placeholder="Write here.." class="form-control input-lg"  name="no_kendaraan" autocomplete="off" required>
                  </div>
                </div>
                <div class="row">
                <div class="form-group">
                    <label class="control-label"><h3>Jenis Kendaraan</h3></label>
                      <select class="form-control input-lg" name="jenis_kendaraan">
                        <option>--Pilih--</option>
                        <option value="Motor">Motor</option>
                        <option value="Mobil">Mobil</option>
                      </select>
                </div>
                  <div class="col-md-12">
                    <br>
                    <center><button class="btn btn-primary btn-lg" name="upload">Simpan</button></center>
                  </div>
                </div>
                <input type="hidden" name="tanggal" value="<?= date('d-M-Y')?>">
                <input type="hidden" name="waktu_masuk"  value="<?= date('H:i:s')?>">
                <input type="hidden" name="waktu_keluar"  value="-">
                <input type="hidden" name="status"  value="masuk">
              <?= form_close()?>
            </div>
          </div>
          </div>
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->