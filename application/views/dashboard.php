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

        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Sejarah Pondok Pesantren</a>
            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Visi Misi Pondok Pesantren</a>
            <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Struktur Organisasi</a>
            <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-table" role="tab" aria-controls="nav-table" aria-selected="false">Kegiatan Harian</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="mt-2 ml-2">


              <div class="d-flex flex-row bg-secondary mb-3 p-2">
                <div class="p-2 bg-light border-right"><img src="<?= base_url('assets/images/navigasi/3.jpeg'); ?>" height="200" width="200"></div> Pondok Pesanren Al-Munajat Kepuh Mandalawangi di dirikan pada tanggal 02 April 2017 pada hari minggu oleh KH. Adang Jazuly putra Alm. Abah KH. Johan Jazuly merupakan pengembangan dari Pondok Pesantren Tafrijul Ahkam Cikiray Rangkas Bitung. Nama Al-Munajat diambil merupakan hasil Permunajatan pendiri dan upaya pengembangan pondok sebelumnya, disamping adanya amanah dari orangtua beliau yang berpesan jika memungkinkan agar mendirikan pesantren di daerah asal usul orangtuanya. Supaya tidak kehilangan jejak Trah keluarga, setelah sekian lama melalui permunajatan yang dalam akhirnya KH. Adang Jazuly dan istri ibu HJ. Wiwin Qibtiah mendirikan pesantren di KP. Kepuh Ds. Cikoneng Kec. Mandalawangi Pandeglang yang kemudian di beri nama ”Pondok Pesantren”Al-munajat Kepuh” pondok pesantren memiliki santri kurang lebih 250 santri dan 28 guru.
              </div>


            </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <b>Visi :</b>
            <p>Melestarikan tradisi masa lalu yang baik, dan mengakomodir tradisi masa kini yang di anggap lebih baik</p>
            <br>
            <b>Misi :</b>
            <p>Membentuk pribadi tafaqquh fiddin, keluasan ilmu dan memiliki akhlak mulia.</p>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <img src="<?= base_url('assets/images/Struktur_Organisasi.png') ?>" alt="">
          </div>
          <div class="tab-pane fade" id="nav-table" role="tabpanel" aria-labelledby="nav-contact-tab">
            <br>
            <center>
              <p>KEGIATAN HARIAN SANTRI</p><br>
              <table border="1">
                <tr>
                  <td style="text-align: center;">No</td>
                  <td style="text-align: center;">Aktifitas Santri</td>
                  <td style="text-align: center;">Jam</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Muhadatsah (percakapan B.Arab &B.Inggris)</td>
                  <td>07.00-07.25</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Belajar di kelas</td>
                  <td>07.25-12.00</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Sholat dzuhur berjamaah</td>
                  <td>12.00-12.30</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Makan siang</td>
                  <td>12.30-14.00</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Masuk kelas</td>
                  <td>14.00-15.00</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Sholat ashar berjamaah</td>
                  <td>15.00-16.00</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Mandi persiapan ke masjid</td>
                  <td>17.00-17.30</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Membaca al quran dan sholat berjamaah</td>
                  <td>17.30-18.30</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Pengajian al quran bagi kelas I dan pengajian kitab kuning bagi kelas II-VI</td>
                  <td>18.30-19.15</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Sholat isya berjamaah</td>
                  <td>19.15-19.30</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Makan malam</td>
                  <td>19.30-20.00</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Belajar malam</td>
                  <td>20.00-21.30</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>Istirahat/ tidur</td>
                  <td>21.30-04.00</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Sholat subuh berjamaah</td>
                  <td>04.00-04.45</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Pengajian al quran bagi kelas I dan pengajian kitab kuning bagi kelas II-VI</td>
                  <td>04.45-06.00</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>PePersiapan masuk kelas</td>
                  <td>06.00-07.00</td>
                </tr>
              </table>
            </center>
          </div>

        </div>
      </div>
      <!-- navigasi end -->
  </div>
  <!--/. container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->