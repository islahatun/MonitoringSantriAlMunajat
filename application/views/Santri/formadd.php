<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
<!-- Toastr -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css'); ?>">
<!-- Select2 -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/select2/css/select2.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">

<div class="content-wrapper" style="min-height: 1302.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
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
                            <h3 class="card-title"><?= $subtitle; ?></h3>
                        </div>
                        <form id="form_poliklinik" class="form-horizontal">
                            <!-- /.card-header -->
                            <div class="card-body">
                            <input type="hidden" class="form-control form-control-sm" id="kelas" value="<?=$dp->id_kelas?>">
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">NISN</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="nisn" placeholder="NISN">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Nama Santri</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="nama_santri" placeholder="Nama Santri">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="jenis_kelamin" placeholder="Jenis Kelamin">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control form-control-sm" id="tanggal_lahir"  placeholder="Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Agama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="agama"  placeholder="agama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Alamat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="alamat"  placeholder="alamat">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Nama Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="nama_ayah"  placeholder="nama_ayah">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Tanggal Lahir Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control form-control-sm" id="tanggal_lahir_ayah"  placeholder="Tanggal Lahir Ayah">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Pekerjaan Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah">
                                    </div>
                                </div>
                                    </div>
                                    <div class="col">
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">No Hp Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="no_hp_ayah" placeholder="No Hp Ayah">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Nama Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="nama_ibu" placeholder="Nama Ibu">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Tanggal Lahir Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control form-control-sm" id="tanggal_lahir_ibu"  placeholder="Tanggal Lahir Ibu">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Pekerjaan Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="pekerjaan_ibu"  placeholder="Pekerjaan Ibu">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">No Hp Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="no_hp_ibu"  placeholder="No Hp Ibu">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Alammat Orang Tua</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="alamat_orang_tua"  placeholder="Alamat Orang Tua">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Nama Wali santri</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="nama_wali_santri"  placeholder="Nama Wali Santri">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">Alamat Wali santri</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="alamat_wali_santri"  placeholder="Alamat Wali Santri">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label-sm">No Hp Wali santri</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="no_hp_wali_santri"  placeholder="No Hp Wali Santri">
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <a href="<?= base_url('Santri/listSantri/' . $dp->id_kelas); ?>" type="button" class="btn btn-secondary">Kembali</a>
                                <button type="button" class="btn btn-primary" onclick="saveSantri()">Save</button>
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
    // $(function() {
    //     $('#nama_santri').select2({
    //         theme: 'bootstrap4'
    //     });
    // });

    function saveSantri() {
        //debugger
        PatchURL = _baseurl.concat('/Santri/save');

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
                toastr.success('Data berhasil disimpan.');

                clearText();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal disimpan.');
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