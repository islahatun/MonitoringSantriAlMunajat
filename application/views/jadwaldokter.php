<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
<!-- Toastr -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css'); ?>">
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">

<div class="content-wrapper" style="min-height: 1302.12px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1><?= $title; ?></h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">

              <div class="row">
                <div class="col-md-6">
                  <h3 class="card-title"><?= $subtitle; ?></h3>
                </div>
                <!-- <div class="col-md-6 text-right">
                  <a href="<?= base_url('TenagaKesehatan/add'); ?>" class="btn btn-sm btn-info">
                    <i class="fas fa-plus"></i> Tambah
                  </a>
                </div> -->
              </div>
            </div>


            <!-- /.card-header -->
            <div class="card-body">
              <table id="ttenagakesehatan" class="table w-100 table-bordered table-striped">
                <thead>
                  <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama Dokter</th>
                    <th rowspan="2">PoliKlinik</th>
                    <th colspan="7" class="text-center">Jadwal</th>
                  </tr>
                  <tr>
                    <th>Senin</th>
                    <th>Selasa</th>
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jum'at</th>
                    <th>Sabtu</th>
                    <th>Minggu</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<!-- Page specific script -->
<script>
  $(document).ready(function() {
    //debugger
    PatchURL = _url.concat('/datalist');
    $('#ttenagakesehatan').DataTable({
      //"order": [2, "asc", 1, "asc"], //Initial no order.
      "destroy": true,

      ajax: {
        type: "GET",
        url: PatchURL,
        dataSrc: ""
      },
      "columns": [{
          "data": "nomor",
          className: "align-middle text-center small"
        },
        {
          "data": "nama_dokter",
          className: "align-middle small"
        },
        {
          "data": "poliklinik_id",
          className: "align-middle small"
        },
        {
          "data": "senin",
          className: "align-middle small"
        },
        {
          "data": "selasa",
          className: "align-middle small"
        },
        {
          "data": "rabu",
          className: "align-middle small"
        },
        {
          "data": "kamis",
          className: "align-middle small"
        },
        {
          "data": "jumat",
          className: "align-middle small"
        },
        {
          "data": "sabtu",
          className: "align-middle small"
        },
        {
          "data": "minggu",
          className: "align-middle small"
        },
      ]
    });
  });

  // $(document).on("click", "#btn_nakes_del", function() {
  //   //debugger
  //   var vid_dokter = $(this).attr("vid_dokter");

  //   if (!vid_dokter) {
  //     toastr.error('Data gagal dihapus.');
  //     return
  //   }

  //   var value = {
  //     id_dokter: vid_dokter
  //   };

  //   Swal.fire({
  //     title: 'Apakah anda yakin.?',
  //     text: "Data yang dihapus tidak dapat dikembalikan!",
  //     showCancelButton: true,
  //     confirmButtonColor: '#3085d6',
  //     cancelButtonColor: '#d33',
  //     confirmButtonText: 'Yes, delete it!'
  //   }).then((result) => {
  //     if (result.isConfirmed) {
  //       $.ajax({
  //         type: "POST",
  //         url: _url.concat('/delete'),
  //         data: value,
  //         cache: false,
  //         success: function(data, textStatus, jqXHR) {
  //           debugger
  //           var table = $('#ttenagakesehatan').DataTable();
  //           table.ajax.reload();
  //           toastr.success('Data berhasil dihapus.');
  //         },
  //         error: function(jqXHR, textStatus, errorThrown) {
  //           toastr.error('Data gagal dihapus.');
  //         }
  //       });
  //     }
  //   })
  // });
</script>
<!-- SweetAlert2 -->
<script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>