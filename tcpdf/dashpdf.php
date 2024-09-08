<?php
//============================================================+
// File name   : example_002.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 002 for TCPDF class
//               Removing Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Removing Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 * @group header
 * @group footer
 * @group page
 * @group pdf
 */

// Include the main TCPDF library (search for installation path).
include '../config/config.php';
define('PDF_FONT_NAME_MAIN', 'th-sarabun');
require_once('tcpdf.php');

// create new PDF document with landscape orientation
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Nicola Asuni');
$pdf->setTitle('รายงานสรุปผลร    วม');
$pdf->setSubject('TCPDF Tutorial');
$pdf->setKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(10, 20, 10);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, 10);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->setFont('th-sarabun', 'BI', 16);

//$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// เพิ่มหน้าใหม่
$pdf->AddPage();
$pdf->SetY(0);
// Set page size to A4

// Include the HTML content to be converted
ob_start();
include 'dashboard.php';
$content = ob_get_clean();

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 10);
// Write HTML content
$pdf->writeHTML($content, true, false, true, false, '');

$pdf->Cell(0, 10, '', 0, 1, 'C');


// Close and output PDF document
$pdf->Output('ใบจองอุกปรณ์ ' . '.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
