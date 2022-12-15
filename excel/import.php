<?php
    session_start();

    require '../vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use Mwahba\ImportExcel;

    $upload = 'upload';
    \Mwahba\Importexcel\ImportExcel::import_excel($upload);
    header("location: ../index.php");