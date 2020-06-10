
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <?= $title?></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $film;?></h3>

              <p>Movie</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-film"></i>
            </div>
            <a href="<?php echo site_url('admin/allmovie');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $anime?></h3>

              <p>Anime</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-monitor"></i>
            </div>
            <a href="<?php echo site_url('admin/allanime');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Contact</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Movie List</h3>
            </div>
            <div class="box-body table-responsive">
            <table class="table table-striped table-hover">
            <thead>
                <tr class="bg-primary">
                    <th>A - Z</th>
                    <th>Genre</th>
                    <th>Quality</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody> <!-- para abrir em outra aba adicionar target="_blank" -->
              <?php foreach ($movie_list as $a){?>
                
                <tr>
                    <td><a href="#"><font size="4px" color="#000"><?php echo $a->title?></font></a></td>
                    <td><?php echo $a->genre?></td>
                    <td><?php echo $a->quality?></td>
                    <td><?php echo $a->year?></td> 
                </tr>
                </a>
              <?php }?>
            </tbody>
            </table>
            </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Anime List</h3>
            </div>
            <div class="box-body table-responsive">
            <table class="table table-striped table-hover">
            <thead>
                <tr class="bg-primary">
                    <th>A - Z</th>
                    <th>Genre</th>
                    <th>Episode</th>
                </tr>
            </thead>
            <tbody> <!-- para abrir em outra aba adicionar target="_blank" -->
              <?php foreach ($anime_list as $a){?>
                
                <tr>
                    <td><a href="#"><font size="4px" color="#000"><?php echo $a->title?></font></a></td>
                    <td><?php echo $a->genre?></td>
                    <td><?php echo $a->episode?> Episode</td>
                </tr>
                </a>
              <?php }?>
            </tbody>
            </table>

            </div>
        </div>
      </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->