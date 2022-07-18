<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $this->view('_parent/head.php');
  ?>
</head>

<body>


  <!-- Carousel -->
  <div class="container-fluid">

    <!-- navbar -->
    <!-- Image and text -->
    <nav class="navbar navbar-info bg-info">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/images/logo.jpeg'); ?>" width="30" height="30" class="brand-image img-circle elevation-3" style="opacity: .8" alt="">
        Monitoring Santri Al-Munajat
      </a>
    </nav>
    <!-- Navbar End -->

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url('assets/images/navigasi/2.jpeg'); ?>" class="d-block w-100" height="500">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/images/navigasi/2.jpeg'); ?>" class="d-block w-100" height="500">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/images/navigasi/1.jpeg'); ?>" class="d-block w-100" height="500">
        </div>
      </div>
    </div>
    <!-- Carousel end -->

    <!-- navigasi -->
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Sejarah Pondok Pesantren</a>
        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Visi Misi Pondok Pesantren</a>
        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Masuk</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="mt-2 ml-2">
          <img src="<?= base_url('assets/images/navigasi/3.0.jpeg'); ?>" height="200" width="200" style="display:flex|inline-flex">
          <p>Pondok Pesanren Al-Munajat Kepuh Mandalawangi di dirikan pada tanggal 2 april 2017 pada hari minggu oleh KH.Adang Jazuly putra Alm.Abah KH.Johan Jazuly.
            Nama Al-Munajat di ambil merupakan hasil permunajatan pendiri dan upaya pengembangan pondok sebelumnya,disamping adanya Amanah dari orang tua beliau yang berpesan jik memungkinkan agar mendirikan pesantren di daerah asal usul orang tuanya.Supaya tidak kehilangan jejak Trah keluarga (Parem Obor),setelah sekian lama melalui permunajatan yang dalam akhirnya KH.Adang Jazuly dan istri ibu HJ.Wiwin Qibtiah mendirikan pesantren di KP.Kepuh ds.Cikoneng Kec.Mandalawangi Pandeglang.Yang kemudian di beri nama”Pondok Pesantren”Al-Munajat Kepuh”</p>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <b>Visi</b>
        <p>Melestarikan tradisi masa lalu yang baik, dan mengakomodir tradisi masa kini yang di anggap lebih baik</p>
        <br>
        <b>Misi</b>
        <p>Membentuk pribadi tafaqquh fiddin, keluasan ilmu dan memiliki akhlak mulia.</p>
      </div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div class="login-page" style="min-height: 496.781px;">
          <div class="card">
            <div class="card-body login-card-body">
              <p class="login-box-msg">Login Form</p>
              <?= $this->session->flashdata('error_login') ?>
              <form method="post" action="<?= base_url('login/login'); ?>">
                <div class="input-group mb-3">
                  <input type="text" name="username" class="form-control" placeholder="Username">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" name="pwd" class="form-control" placeholder="Password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Log In</button>
                  </div>
                  <!--  /.col -->
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
      <!-- navigasi end -->


    </div>





    <!-- <div class="login-box m-auto mt-4"> -->
    <!-- /.login-logo -->
    <!-- <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Login Form</p>

        <form method="post" action="<?= base_url('login/login'); ?>">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="pwd" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </div> -->
    <!-- /.col -->
    <!-- </div>
        </form>
      </div> -->
    <!-- /.login-card-body -->
    <!-- </div>
  </div> -->
    <!-- /.login-box -->

    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/theme/js/adminlte.min.js'); ?>"></script>
    <!-- JS -->
    <script src="<?= base_url('assets/js/js.js'); ?>"></script>

</body>

</html>