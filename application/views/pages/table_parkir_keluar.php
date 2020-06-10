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
              <table class="table table-stripped table-bordered" id="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Parkir</th>
                    <th>No Kendaraan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Tanggal</th>
                    <th>Waktu Keluar</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = '1' ?>
                  <?php foreach ($dataParkirMasuk as $data) :?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['id_parkir'] ?></td>
                    <td><?= $data['no_kendaraan']?></td>
                    <td><?= $data['jenis_kendaraan']?></td>
                    <td><?= $data['tanggal']?></td>
                    <td><?= $data['waktu_keluar']?> WIB</td>
                    <td><?= $data['status']?></td>
                    <td>
                      <center>
                        <a class="btn btn-primary" href="<?php echo site_url();?>data_list/detail/<?= $data['id_parkir']?>"><span class="fa fa-eye"></span> Detail</a>
                        <a class="btn btn-danger" onClick="return confirm('Apakah anda yakin data ini akan di hapus secara permanen?');" href="<?php echo site_url();?>data_list/delete/<?= $data['id_parkir']?>"><span class="fa fa-close"></span> Hapus</a>
                      </center>
                    </td>
                  </tr>
                  <?php endforeach ;?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
