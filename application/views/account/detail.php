<html>

<head>
    <title>Daftar Bahan Makanan</title>
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>assets/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url(); ?>assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url(); ?>assets/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>assets/gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Instrumen Teknologi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?= base_url('beranda'); ?>">Home <span class="sr-only">(current)</span></a>
            </div>
        </div>
    </nav>
    <div class="x_panel">
        <div class="x_content">
            <h2>Kandungan Dari Bahan Makanan <?= $row->nama_bahan; ?></h2>
            <p>Berat yang dimiliki dari <?= $row->nama_bahan ?>adalah 100 gram,
                Jika ingin mengetahui kandungan gizi kurang dari 100 gram bisa memasukan angka yang diinginkan</p>
            <input type="numeric" name="bagi" id="bagi">
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Hitung</button>
            <table class="table table-bordered" id="mytable" style="width: 50%;">
                <tr>
                    <td>air</td>
                    <td>:</td>
                    <td><?= $row->air; ?></td>
                </tr>
                <tr>
                    <td>energi</td>
                    <td>:</td>
                    <td><?= $row->energi; ?></td>
                </tr>
                <tr>
                    <td>protein</td>
                    <td>:</td>
                    <td><?= $row->protein ?></td>
                </tr>
                <tr>
                    <td>lemak</td>
                    <td>:</td>
                    <td><?= $row->lemak ?></td>
                </tr>
                <tr>
                    <td>karbohidrat</td>
                    <td>:</td>
                    <td><?= $row->kh ?></td>
                </tr>
                <tr>
                    <td>abu</td>
                    <td>:</td>
                    <td><?= $row->abu ?></td>
                </tr>
                <tr>
                    <td>kalsium</td>
                    <td>:</td>
                    <td><?= $row->kalsium ?></td>
                </tr>
                <tr>
                    <td>fosfor</td>
                    <td>:</td>
                    <td><?= $row->fosfor ?></td>
                </tr>
                <tr>
                    <td>besi</td>
                    <td>:</td>
                    <td><?= $row->besi ?></td>
                </tr>
                <tr>
                    <td>natrium</td>
                    <td>:</td>
                    <td><?= $row->natrium ?></td>
                </tr>
                <tr>
                    <td>kalium</td>
                    <td>:</td>
                    <td><?= $row->kalium ?></td>
                </tr>
                <tr>
                    <td>tembaga</td>
                    <td>:</td>
                    <td><?= $row->tembaga ?></td>
                </tr>
                <tr>
                    <td>seng</td>
                    <td>:</td>
                    <td><?= $row->seng ?></td>
                </tr>
            </table>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url(); ?>assets/gentelella/build/js/custom.min.js"></script>
    <script>
        const array = ["2", "2", "2", "2", "2", "2", "2", "2", "2", "2", "2", "2", "2"];
        const btn = document.getElementById('submit');
        btn.addEventListener('click', function() {
            const submit = document.getElementById('bagi').value;
            for (let index = 0; index < array.length; index++) {
                const tb = document.getElementById('mytable').rows[index].cells.item(array[index]);
                tb.innerHTML /= submit;
            }
        })
    </script>
</body>

</html>