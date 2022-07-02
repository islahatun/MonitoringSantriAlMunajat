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
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
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
                            <h3 class="card-title"><?= $subtitle; ?></h3>
                        </div>
                        <form id="form_poliklinik" class="form-horizontal">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <input type="hidden" value="<?= $ao->id_prestasi ?>" id="id_prestasi">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">NISN</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="nisn" placeholder="NISN" value="<?= $ao->nisn ?>">
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Nama Santri</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="nama_santri" placeholder="Nama Santri" value="<?= $ao->nama_santri ?>">
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Prestasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="prestasi" placeholder="Prestasi" value="<?= $ao->prestasi ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control form-control-sm" id="tanggal_submit" value="<?= $ao->tanggal_submit ?>" placeholder="Tanggal">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <a href="<?= base_url('Prestasi/listPrestasi/' . $ao->kelas); ?>" type="button" class="btn btn-secondary">Kembali</a>
                                <button type="button" class="btn btn-primary" onclick="updateSaveAO()">Save</button>
                            </div>
                        </form>
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
    function updateSaveAO() {
        debugger
        PatchURL = _baseurl.concat('/Prestasi/updateSave');
        var vid_prestasi = $("#id_prestasi").val();
        var vnisn = $("#nisn").val();
        // var vnama_santri = $("#nama_santri").val();
        var vprestasi = $("#prestasi").val();
        var vtanggal_submit = $("#tanggal_submit").val();

        var value = {
            id_prestasi: vid_prestasi,
            nisn: vnisn,
            // nama_santri: vnama_santri,
            prestasi: vprestasi,
            tanggal_submit: vtanggal_submit
        };

        $.ajax({
            type: "POST",
            url: PatchURL,
            data: value,
            cache: false,
            success: function(data, textStatus, jqXHR) {
                debugger
                //var data = jQuery.parseJSON(data);
                toastr.success('Data berhasil diubah.');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal diubah.');
            }
        });
    }

    function clearText() {
        $("#nisn").val("");
        $("#nama_santri").val("");
        $("#prestasi").val("");
        $("#tanggal_submit").val("");
    }
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