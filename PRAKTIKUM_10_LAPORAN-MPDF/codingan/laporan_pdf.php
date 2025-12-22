<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'koneksi.php';

use Mpdf\Mpdf;

$mpdf = new Mpdf([
    'format' => 'A4',
    'margin_top' => 35,
    'margin_bottom' => 20
]);

// HEADER
$header = '
<table width="100%" style="border-bottom:2px solid #000;">
<tr>
    <td width="15%">
        <img src="assets/logo.png" width="70">
    </td>
    <td width="85%" style="text-align:center;">
        <h2 style="margin:0;">LAPORAN DATA SISWA</h2>
        <p style="margin:0;">Sistem Informasi Akademik</p>
    </td>
</tr>
</table>
';

$mpdf->SetHTMLHeader($header);

// FOOTER
$footer = '
<table width="100%" style="font-size:10px;">
<tr>
    <td width="50%">Dicetak: '.date('d-m-Y').'</td>
    <td width="50%" align="right">Halaman {PAGENO}</td>
</tr>
</table>
';

$mpdf->SetHTMLFooter($footer);

// STYLE
$html = '
<style>
body {
    font-family: Arial;
    font-size: 11pt;
}
table.data {
    border-collapse: collapse;
    width: 100%;
}
table.data th {
    background-color: #2c3e50;
    color: #fff;
    padding: 8px;
}
table.data td {
    padding: 8px;
    border: 1px solid #000;
}
</style>

<br>
<h3>Data Siswa</h3>

<table class="data">
<tr>
    <th>No</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Kelas</th>
</tr>
';

// QUERY DATA
$query = mysqli_query($koneksi, "SELECT * FROM siswa");
$no = 1;

while ($row = mysqli_fetch_assoc($query)) {
    $html .= '
    <tr>
        <td>'.$no++.'</td>
        <td>'.$row['nis'].'</td>
        <td>'.$row['nama'].'</td>
        <td>'.$row['kelas'].'</td>
    </tr>';
}

$html .= '</table>';

// TULIS KE PDF
$mpdf->WriteHTML($html);
$mpdf->Output('laporan_siswa.pdf', 'I');