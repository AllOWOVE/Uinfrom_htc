<?php
include '../config/config.php';
include '../book/check_order.php';
session_start();

// Include TCPDF library
define('PDF_FONT_NAME_MAIN', 'th-sarabun');
require_once('tcpdf.php');

// create new PDF document with landscape orientation
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Nicola Asuni');
$pdf->setTitle('พิมพ์ใบจอง B');
$pdf->setSubject('TCPDF Tutorial');
$pdf->setKeywords('TCPDF, PDF, example, test, guide');
// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set margins
$pdf->SetMargins(8,8,8);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set font
$pdf->setFont('th-sarabun', 'B', 11);


// Set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// Add a page
$pdf->AddPage();


// Include the HTML content to be converted
ob_start();
include 'B.php';
$content = ob_get_clean();

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 10);
// Write HTML content
$pdf->writeHTML($content, true, false, true, false, '');

// Close and output PDF document
$pdf->Output('ใบจองอุกปรณ์ '.$t_name.$f_name.' '.$l_name.'.pdf', 'I');
