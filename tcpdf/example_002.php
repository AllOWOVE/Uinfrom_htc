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
include '../book/check_order.php';
session_start();
define('PDF_FONT_NAME_MAIN', 'th-sarabun');
require_once('tcpdf.php');

// create new PDF document with landscape orientation
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Nicola Asuni');
$pdf->setTitle('TCPDF Example 002');
$pdf->setSubject('TCPDF Tutorial');
$pdf->setKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
	require_once(dirname(__FILE__) . '/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->setFont('th-sarabun', 'BI', 10);

// add a page
$pdf->AddPage();

// set some text to print
$html = '
<table cellpadding="5" cellspacing="5" style="width:100%; height:100%;">
    <tr>
        <td style="width:50%;  height:100%;">
            <div>
                <h2 >' . $student_id . '&nbsp;B</h2>
                <div >
                    <table>
                        <tr>
                            <th>ชื่อ-สกุล</th>
                            <td>' . $t_name . ' ' . $f_name . ' ' . $l_name . '</td>
                            <th>เเผนก</th>
                            <td>' . $branch_name . '</td>
                        </tr>
                        <tr>
                            <th>โทรศัพท์</th>
                            <td>' . $tel . '</td>
                            <th>วันที่</th>
                            <td>' . $date . '</td>
                        </tr>
                    </table>
					<br>
					<table>
						<tr>
							<th class="text-center">ลำดับ</th>
							<th>รายการ</th>
							<th>ขนาด</th>
							<th>ราคา/หน่วย</th>
							<th>จำนวน</th>
							<th>ราคา</th>
						</tr>
					</table>
					</div>
					</div>
					';


$html .= '

        </td>
    </tr>
</table>';

// Write HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
