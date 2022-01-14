use mPDF;
@php
include '../../../vendor/autoload.php';

$mpdf = new mPDF();
$mpdf->WriteHTML("Hello World
");
$mpdf->Output();
@endphp
