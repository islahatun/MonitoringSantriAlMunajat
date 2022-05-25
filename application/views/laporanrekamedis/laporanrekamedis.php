<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
<!-- Toastr -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css'); ?>">
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
<!-- daterange picker -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?>">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>">

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
                <div class="col-3">
                    <div class="card border-info">
                        <div class="card-header">
                            <form action="">
                                <label class=" col-form-label col-form-label-sm ">Tanggal Mulai</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <label class=" col-form-label col-form-label-sm ">Tanggal Akhir</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <label class=" col-form-label col-form-label-sm ">Poli</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class="far fa-hospital"></i></span>
                                    </div>
                                    <select class="custom-select select2" id="poli">
                                        <option selected class="col-form-label-sm">-- Tampilkan Semua --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <label class=" col-form-label col-form-label-sm ">Dokter</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class="fas fa-user-md"></i></span>
                                    </div>
                                    <select class="custom-select" id="dokter">
                                        <option selected>-- Tampilkan Semua --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <label class=" col-form-label col-form-label-sm ">Pasien</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class="fas fa-user"></i></span>
                                    </div>
                                    <select class="custom-select select2" id="pasien1">
                                        <option selected>-- Tampilkan Semua --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <label class=" col-form-label col-form-label-sm ">Jenis Pasien</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class="fas fa-user-injured"></i></span>
                                    </div>
                                    <select class="custom-select select2" id="inputGroupSelect01">
                                        <option selected>-- Tampilkan Semua --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <button type="button" class="btn btn-info">
                                    <i class="fas fa-search"></i> Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="card-title"><?= $subtitle; ?></h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="<?= base_url('AturanObat/add'); ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-print"></i> Print
                                    </a>
                                </div>
                            </div>
                        </div>


                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="listKunjungan" class="table w-100 table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-md-1">No</th>
                                        <th class="col-md-2 text-center">Nomor Pendaftaran </th>
                                        <th class="col-md-1 text-center">Nomor Pasien</th>
                                        <th class="col-md-2 text-center">Nama </th>
                                        <th class="col-md-2 text-center">Tanggal </th>
                                        <th class="col-md-1 text-center">Poli Klinik </th>
                                        <th class="col-md-2 text-center">Dokter </th>
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
    $(function() {
        $('#pasien1').select2({
            theme: 'bootstrap4'
        });
        $('#dokter').select2({
            theme: 'bootstrap4'
        });
        $('#poli').select2({
            theme: 'bootstrap4'
        });
        $('.select2').select2({
            theme: 'bootstrap4'
        });
        $('#submit').on("click", function() {
            PatchURL = _url.concat('/datalist');
            $('#listKunjungan').DataTable({
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
                        "data": "id_pendaftaran",
                        className: "align-middle small"
                    },
                    {
                        "data": "pasien_id",
                        className: "align-middle small"
                    },
                    {
                        "data": "name",
                        className: "align-middle text-center small"
                    },
                    {
                        "data": "tanggal_pendaftaran",
                        className: "align-middle small"
                    },
                    {
                        "data": "poliklinik_name",
                        className: "align-middle small"
                    },
                    {
                        "data": "nama_dokter",
                        className: "align-middle small"
                    }

                ]
            });
        });
    });
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
<!-- Select2 -->
<script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js'); ?>"></script>