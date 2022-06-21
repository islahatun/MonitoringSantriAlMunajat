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
        <!-- navigasi -->
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Sejarah Pondok Pesantren</a>
            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Visi Misi Pondok Pesantren</a>
            <!-- <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Masuk</a> -->
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

        </div>
      </div>
      <!-- navigasi end -->
      <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->