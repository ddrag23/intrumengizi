<?php
use Dompdf\Dompdf;
class Fungsi
{
    public function pdfPrint($html,$fillename,$paper,$orientation)
    {
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper($paper, $orientation);
    $dompdf->render();
    // Output the generated PDF to Browser
    $dompdf->stream($fillename, array("Attachment" => 0));
    }

}

?>
