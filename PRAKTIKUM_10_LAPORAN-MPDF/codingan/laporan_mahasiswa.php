<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'koneksi.php';

use Mpdf\Mpdf;

$mpdf = new Mpdf([
    'format' => 'A4',
    'margin_top' => 20,
    'margin_bottom' => 20
]);

$html = '
<h2 style="text-align:center;">LAPORAN DATA MAHASISWA</h2>
<hr>

<table border="1" cellpadding="8" cellspacing="0" width="100%">
<tr style="background:#2c3e50;color:white;">
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jurusan</th>
</tr>
';

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$no = 1;

while ($row = mysqli_fetch_assoc($query)) {
    $html .= '
    <tr>
        <td>'.$no++.'</td>
        <td>'.$row['nim'].'</td>
        <td>'.$row['nama'].'</td>
        <td>'.$row['jurusan'].'</td>
    </tr>
    ';
}

$html .= '</table>';

$mpdf->WriteHTML($html);
$mpdf->Output('laporan_mahasiswa.pdf', 'I');