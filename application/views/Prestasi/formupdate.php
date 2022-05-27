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
                        <form id="form_pelayanan" class="form-horizontal">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <input required type="hidden" class="form-control form-control-sm" id="id_prestasi" value="<?= $prestasi->id_prestasi; ?>">
                                    <label for="" class="col-sm-2 col-form-label-sm">Nama Prestasi</label>
                                    <div class="col-sm-10">
                                        <input required type="text" class="form-control form-control-sm" id="prestasi" placeholder="Prestasi" value="<?= $prestasi->prestasi; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Point</label>
                                    <div class="col-sm-10">
                                        <input required type="number" class="form-control form-control-sm" id="point" placeholder="Point" value="<?= $prestasi->point; ?>">
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Hukuman</label>
                                    <div class="col-sm-10">
                                        <input required type="text" class="form-control form-control-sm" id="hukuman" placeholder="Hukuman" value="<?= $prestasi->hukuman; ?>">
                                    </div>
                                </div> -->


                                <!-- /.card-body -->
                                <div class="card-footer text-right">
                                    <a href="<?= base_url('Prestasi'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                                    <button type="button" class="btn btn-primary" onclick="updateSavedi()">Save</button>
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
    function updateSavedi() {
        debugger
        PatchURL = _baseurl.concat('/Prestasu/updateSave');
        var vperaturan = $("#prestasi").val();
        var vid_prestasi = $("#id_prestasi").val();
        var vpoint = $("#point").val();
        // var vhukuman = $("#hukuman").val();

        var value = {
            id_prestasi: vid_prestasi,
            peraturan: vperaturan,
            point: vpoint,
            // hukuman: vhukuman,
        };

        $.ajax({
            type: "POST",
            url: PatchURL,
            data: value,
            cache: false,
            success: function(data, textStatus, jqXHR) {
                debugger
                //var data = jQuery.parseJSON(data);
                toastr.success('Data berhasil disimpan.');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal disimpan.');
            }
        });
    }

    function clearText() {
        $("#prestasi").val("");
        $("#point").val("");
        // $("#hukuman").val("");
        // 
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