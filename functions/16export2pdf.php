<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * EXPORT PHP 2 PDF
 */

require 'assets/tcpdf/tcpdf.php';

function exportSEOReportPDF($htmlInfo, $for, $html)
{
    set_time_limit(0);
    ob_start();

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $fileName = $for;
    $htmlInfo["url"] = $for;

    if (!empty($htmlInfo)) {
        // document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Susi Krummenacher');
        $pdf->SetTitle('YOUR HOLOGRAMSEO REPORT');
        $pdf->SetSubject('SEO REPORT');
        $pdf->SetKeywords('TCPDF, PDF, SEO, HOLOGRAMSEO, SUSINSPIRED');

        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

        // set auto page breaks
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        $pdf->AddPage();

        // set font for utf-8 type of data
        $pdf->SetFont('freeserif', '', 12);

        $pdf->writeHTML($html, true, false, false, false, '');
        $pdf->lastPage();
        echo 'pdf written';
    }

    echo 'saving pdf';
    $nowDate = date('m/d/Y h:i:sA');
    ob_end_clean();
    //$pdf->Output ( $nowDate . '_SEO_REPORT_' . $fileName . '_HOLOGRAM_SEO.pdf', 'F' );
    $pdf->Output(__DIR__ . '/report.pdf', 'F');
}
