<!DOCTYPE html>
<html>

<head>
    <title>Report Table</title>
    <style type="text/css">
        table, td{
          border: 1px solid black;
          border-collapse: collapse;
        }
        .short {
            width: 50px;
        }
        .normal {
            width: 150px;
        }
        .tengah {
            text-align: justify;
        }
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="outtable">
        <div>
            <h2 style="text-align: center;">Rincian Menu Harianku</h2>
            <p class="tengah">
            <?= $row->nama_lengkap;?> berumur <?= $row->usia;?> tahun seorang ibu yang memiliki 3 orang anak. Ny. P memiliki
                berat badan 67kg, TB 162 cm bekerja di pabrik pengalengan ikan di bagian produksi.
                Ny. P bekerja selama 8 jam sehari dengan system shift (pagi, siang, malam).
                Buatlah planning menu untuk Ny.P yang memungkinkan untuk dibuat di rumah terutama saat Ny.P melakukan
                aktivitas sebagai karyawan dengan system shift yang disesuaikan dengan
                kondisi klien dengan hasil perhitungan energi dan zat gizi diketahui kebutuhan Ny. P, energi : 2000 kkal,
                karbohidrat : gram,protein : 50 gram, lemak : 35 gram!
            </p>
            <p>
            <u><b> Perencanaan Menu Untuk <?= $row->nama_lengkap;?></b></u>
            </p>
            <p>
            Karbohidrat : <?=$row->karbohidrat;?> gram<br>
            Lemak : <?= $row->lemak;?> gram<br>
            Protein : <?= $row->protein;?> gram<br>
            Energi : <?= $row->energi;?> kkal<br>
            </p>
        </div>
        <div>
            <table>
                <tr>
                    <td rowspan="2">Menu</td>
                    <td rowspan="2">Bahan</td>
                    <td colspan="5" style="text-align: center;">Kandungan Zat Gizi</td>
                </tr>
                <tr>
                    <td>Berat(gram)</td>
                    <td>Karbohidrat(gram)</td>
                    <td>lemak(gram)</td>
                    <td>Protein(gram)</td>
                    <td>Energi(kkal)</td>
                </tr>
                  <?php foreach (json_decode($row->nama_menu) as $m => $menu): ?>
                <tr>
                    <td><?=$menu?></td>
                </tr>
                  <?php endforeach; ?>

                <tr>
                    <td colspan="3">Total Energi dan Zat Gizi</td>
                    <td>320</td>
                    <td>170</td>
                    <td>29</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td colspan="3">Total Kebutuhan</td>
                    <td>2000</td>
                    <td>300</td>
                    <td>50</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td colspan="3">%Pemenuhan</td>
                    <td>16%</td>
                    <td>56%</td>
                    <td>58%</td>
                    <td>62%</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
