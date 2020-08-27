<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PDF {
        
    public function __construct() {
		require_once dirname(__FILE__) . "/dompdf/autoload.inc.php";
	}

	public function generatePDF($html, $filename = "", $stream = TRUE, $paper = "A4", $orientation = "portrait") {
		$dompdf = new DOMPDF();
		$dompdf->loadHtml($html);
		$dompdf->setPaper($paper, $orientation);
		$dompdf->render();
		if ($stream) {
			$dompdf->stream($filename. ".pdf", array("Attachment" => 1));
		} else {
			return $dompdf->output();
		}
	}
}