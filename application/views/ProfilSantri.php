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
                                <input type="hidden" class="form-control form-control-sm" id="id_santri" value="<?= $ao->id_santri ?>">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">NISN</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="nisn" placeholder="NISN" value="<?= $ao->nisn ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Nama Santri</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="nama_santri" placeholder="Nama Santri" value="<?= $ao->nama_santri ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Kelas</label>
                                            <div class="col-sm-8">
                                                <select class="form-control form-control-sm" id="kelas" name="kelas">
                                                    <option><?= $ao->nama_kelas ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Jenis Kelamin</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= $ao->jenis_kelamin ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Tanggal Lahir</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control form-control-sm" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $ao->tanggal_lahir ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Agama</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="agama" placeholder="agama" value="<?= $ao->agama ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Alamat</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="alamat" placeholder="alamat" value="<?= $ao->alamat ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Nama Ayah</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="nama_ayah" placeholder="nama_ayah" value="<?= $ao->nama_ayah ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Tanggal Lahir Ayah</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control form-control-sm" id="tanggal_lahir_ayah" placeholder="Tanggal Lahir Ayah" value="<?= $ao->tanggal_lahir_ayah ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Pekerjaan Ayah</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="<?= $ao->pekerjaan_ayah ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">No Hp Ayah</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="no_hp_ayah" placeholder="No Hp Ayah" value="<?= $ao->no_hp_ayah ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Nama Ibu</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="nama_ibu" placeholder="Nama Ibu" value="<?= $ao->nama_ibu ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Tanggal Lahir Ibu</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control form-control-sm" id="tanggal_lahir_ibu" placeholder="Tanggal Lahir Ibu" value="<?= $ao->tanggal_lahir_ibu ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Pekerjaan Ibu</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="<?= $ao->pekerjaan_ibu ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">No Hp Ibu</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="no_hp_ibu" placeholder="No Hp Ibu" value="<?= $ao->no_hp_ibu ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Alammat Orang Tua</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="alamat_orang_tua" placeholder="Alamat Orang Tua" value="<?= $ao->alamat_orangtua ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Nama Wali santri</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="nama_wali_santri" placeholder="Nama Wali Santri" value="<?= $ao->nama_wali_santri ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Alamat Wali santri</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="alamat_wali_santri" placeholder="Alamat Wali Santri" value="<?= $ao->alamat_wali_santri ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">No Hp Wali santri</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" id="no_hp_wali_santri" placeholder="No Hp Wali Santri" value="<?= $ao->no_hp_wali_santri ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
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
        PatchURL = _baseurl.concat('/Santri/updateSave');

        var vid_santri = $("#id_santri").val();
        var vnisn = $("#nisn").val();
        var vnama_santri = $("#nama_santri").val();
        var vkelas = $("#kelas").val();
        var vjenis_kelamin = $("#jenis_kelamin").val();
        var vagama = $("#agama").val();
        var vtanggal_lahir = $("#tanggal_lahir").val();
        var valamat = $("#alamat").val();
        var vnama_ayah = $("#nama_ayah").val();
        var vtanggal_lahir_ayah = $("#tanggal_lahir_ayah").val();
        var vpekerjaan_ayah = $("#pekerjaan_ayah").val();
        var vno_hp_ayah = $("#no_hp_ayah").val();
        var vnama_ibu = $("#nama_ibu").val();
        var vtanggal_lahir_ibu = $("#tanggal_lahir_ibu").val();
        var vpekerjaan_ibu = $("#pekerjaan_ibu").val();
        var vno_hp_ibu = $("#no_hp_ibu").val();
        var valamat_orang_tua = $("#alamat_orang_tua").val();
        var vnama_wali_santri = $("#nama_wali_santri").val();
        var valamat_wali_santri = $("#alamat_wali_santri").val();
        var vno_hp_wali_santri = $("#no_hp_wali_santri").val();

        var value = {
            id_santri: vid_santri,
            alamat: valamat,
            nama_ayah: vnama_ayah,
            no_hp_ayah: vno_hp_ayah,
            pekerjaan_ayah: vpekerjaan_ayah,
            tanggal_lahir_ayah: vtanggal_lahir_ayah,
            nama_ibu: vnama_ibu,
            tanggal_lahir_ibu: vtanggal_lahir_ibu,
            pekerjaan_ibu: vpekerjaan_ibu,
            no_hp_ibu: vno_hp_ibu,
            alamat_orang_tua: valamat_orang_tua,
            nama_wali_santri: vnama_wali_santri,
            alamat_wali_santri: valamat_wali_santri,
            no_hp_wali_santri: vno_hp_wali_santri,
            nisn: vnisn,
            nama_santri: vnama_santri,
            agama: vagama,
            jenis_kelamin: vjenis_kelamin,
            kelas: vkelas,
            tanggal_lahir: vtanggal_lahir
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