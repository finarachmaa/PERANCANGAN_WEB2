<?php
require_once __DIR__ . '/vendor/autoload.php';

use Mpdf\Mpdf;

$mpdf = new Mpdf();

$html = '
<h1 style="text-align:center;">TEST mPDF BERHASIL</h1>
<hr>
<p>Jika tulisan ini muncul dalam bentuk PDF, berarti:</p>
<ul>
    <li>Composer berhasil</li>
    <li>mPDF berhasil</li>
    <li>PHP berjalan normal</li>
</ul>
';

$mpdf->WriteHTML($html);
$mpdf->Output('test_mpdf.pdf', 'I');