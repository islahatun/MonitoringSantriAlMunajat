  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 290px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0"><?= $title ?> <?= $this->session->userdata('status'); ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1">
                <i class="fas fa-medal"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text"> <a href="">Prestasi</a> </span>
                <span class="info-box-number">
                  <?php

                  $hitung = "SELECT * FROM dm_prestasi ";
                  $h = $this->db->query($hitung)->num_rows();
                  echo $h;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1">
                <i class="fas fa-book-reader"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Hapalan</span>
                <span class="info-box-number">
                  <?php

                  $hitung = "SELECT * FROM dm_hapalan";
                  $h = $this->db->query($hitung)->num_rows();
                  echo $h;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-calendar-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pelanggaran</span>
                <span class="info-box-number"><?php

                                              $hitung = "SELECT * FROM dm_pelanggaran";
                                              $h = $this->db->query($hitung)->num_rows();
                                              echo $h;
                                              ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->