<?php
include('../includes/connection.php');
$ID = $_GET['ID'];
require_once('./assets/tcpdf/tcpdf.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
    
}

// create new PDF document
// Vertical PDF print
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Horizontal PDF print
// $pdf = new MYPDF($orientation = 'L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('CMTI');
$pdf->SetTitle('CMTI Certificate');
$pdf->SetSubject('Certificate');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(0);

// remove default footer
$pdf->setPrintFooter(false);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// ---------------------------------------------------------

$sql= "SELECT * FROM enrollment_form WHERE enrollment_form.ID='$ID'" or die(mysqli_error($con));
// echo $sql;
$query = $con->query($sql);
if($query->num_rows > 0)
{
	$prow = $query->fetch_assoc();
	$pdf->setPrintHeader(false);

// add a page
$pdf->AddPage();

// set font
// $pdf->SetFont('times', '', 48);
$fontname = TCPDF_FONTS::addTTFfont('./assets/tcpdf/fonts/custom-font/Kanit-Light.ttf', 'TrueTypeUnicode', '', 36);

$pdf->SetFont($fontname, '', 29, '', false);

// get the current page break margin
$bMargin = $pdf->getBreakMargin();
// get current auto-page-break mode
$auto_page_break = $pdf->getAutoPageBreak();
// disable auto-page-break
$pdf->SetAutoPageBreak(false, 0);
// set bacground image
$img_file = K_PATH_IMAGES.'AEAMT_Certificate.jpg';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);

// restore auto-page-break status
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
// set the starting point for the page content
$pdf->setPageMark();

$pdf->SetMargins(20, 20, 20, true); // set the margins
$pdf->SetY(101);

// Print a text
$name = $prow['Name'];
$name='<span style="color:#05487f;text-align:center;font-size:29pt;font-weight: bold;">'.$name.' </span>';
$pdf->writeHTML($name, true, false, true, false, '');

$pdf->SetMargins(20, 20, 20, true); // set the margins
$pdf->SetY(127);
$title = $prow['Title'];
$title='<span style="color:#05487f;text-align:center;font-size:18pt;font-weight: bold;">'.$title.' </span>';
$pdf->writeHTML($title, true, false, true, false, '');

$pdf->SetMargins(20, 20, 20, true); // set the margins
// $pdf->SetY(161);
// $commencingdate = $prow['Commencing_Date'];
// $commencingdate='<span style="color:#05487f;text-align:center;font-size:18pt;font-weight: bold;">'.$commencingdate.' </span>';
// $pdf->writeHTML($commencingdate, true, false, true, false, '');

//Close and output PDF document
$pdf->Output('CMTI_certificate.pdf', 'I');
}

else{
	$_SESSION['error'] = 'Suspicious activity recorded. Account will be frozen for unauthorized access.';
	// header('location: home.php');
	echo $_SESSION['error'];
}

?>