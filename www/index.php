<?php
require 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$name="Wuttipong Thongmon";
$html = "
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url(\"fonts/THSarabunNew.ttf\") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url(\"fonts/THSarabunNew Bold.ttf\") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url(\"fonts/THSarabunNew Italic.ttf\") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url(\"fonts/THSarabunNew BoldItalic.ttf\") format('truetype');
        }

        body {
            font-family:\"THSarabunNew\";
        }
    </style>
</head>
<body>
<h1>ใบแจ้งหนี้สำหรับ {$name}</h1>
ขอขอบคุณในการสั่งซื้อ
</body>
</html>
";
$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
