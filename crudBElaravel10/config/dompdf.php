<?php

// File: config/dompdf.php

// return [
//     'temp_dir' => storage_path('/temp'),
//     'font_dir' => storage_path('/fonts'),
//     'font_cache' => storage_path('/fonts'),
//     'chroot' => base_path(),
//     'log_output_file' => storage_path('logs/dompdf.log'),
//     'enable_html5_parser' => true, // Aktifkan parser HTML5
//     'isPhpEnabled' => true, // Aktifkan mode PHP
//     'isHtml5ParserEnabled' => true, // Aktifkan parser HTML5
//     'isPhpEnabled' => true, // Aktifkan mode PHP
//     'isHtml5ParserEnabled' => true, // Aktifkan parser HTML5
//     'isHtml5PhpEnabled' => true, // Aktifkan mode PHP untuk HTML5
//     'pdf_backend' => 'CPDF', // Backend PDF yang akan digunakan (boleh CPDF, GD, atau auto)
//     'defaultMediaType' => 'screen', // Jenis media default (boleh 'screen' atau 'print')
//     'defaultPaperSize' => 'a4', // Ukuran kertas default (boleh 'a4', 'letter', dll.)
//     'defaultFont' => 'serif', // Font default yang akan digunakan
// ];



return [
    'fontDir' => storage_path('fonts/'),
    'fontCache' => storage_path('fonts/'),
    'tempDir' => storage_path('temp/'),
    'chroot' => realpath(base_path()),
    'enable_php' => true,
    'isHtml5ParserEnabled' => true,
    'isPhpEnabled' => true,
    'isPhp7' => true,
    'isPhpEnabled' => true,
];
