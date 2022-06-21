<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Hapalan</title>
</head>

<body>
    <center>
        <table border="1" width="500">
            <tr>
                <td>
                    <img src="<?= base_url('assets/images/logo.jpeg'); ?>" width="50" height="50" alt="">
                </td>
                <td style="text-align: center;">
                    <p>PESANTREN AL-MUNAJAT</p>
                </td>
            </tr>
        </table>
        <hr>
    </center>
    <center>LAPORAN HAPALAN SANTRI AL-MUNAJAT</center>
    <br>
    <center>
        <table border="1" CELLSPACING="0" paddingspacing="10">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-1 text-center">NISN</th>
                    <th class="col-md-2 text-center">Nama Santri</th>
                    <th class="col-md-1 text-center">juz</th>
                    <th class="col-md-2 text-center">Surah</th>
                    <th class="col-md-1 text-center">Ayat</th>
                    <th class="col-md-2 text-center">Tanggal</th>
                    <!-- <th class="col-md-2 text-center">Aksi</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                // $list = $this->MMasterBarang->datalist();
                foreach ($list as $l) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $l->nisn ?></td>
                        <td><?= $l->nama_santri ?></td>
                        <td><?= $l->juz ?></td>
                        <td><?= $l->surah ?></td>
                        <td><?= $l->ayat ?></td>
                        <td><?= $l->tanggal ?></td>
                    </tr>
                <?php
                    $i++;
                endforeach ?>
            </tbody>
        </table>
    </center>
</body>

<script>
    window.print();
</script>

</html>