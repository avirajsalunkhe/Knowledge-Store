<?php
// reference the Dompdf namespace
require_once 'vendor/autoload.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
require('page.php');

$dompdf->set_option('isRemoteEnabled', TRUE);

$html=ob_get_contents();
ob_get_clean();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4');

// Render the HTML as PDF
$dompdf->render();

file_put_contents('studentid.pdf', $dompdf->output());

// Output the generated PDF to Browser
// $dompdf->stream('studentid.pdf', array("Attachment" => false));
// $dompdf->Output('Pavan8899.pdf','D');

?>