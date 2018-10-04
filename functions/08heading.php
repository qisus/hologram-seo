<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * TEST NR. 08 H1 und H2 Checker
 */

function checkHeadingsInfo($xpath, $htmlInfo)
{

    $h1headings = $xpath->query("//h1");
	$h1Contents = array();

    foreach ($h1headings as $h1h) {
		array_push($h1Contents, trim(strip_tags($h1h->textContent)));
	}

	$htmlInfo["h1"] = $h1Contents;
	$h1count = count($htmlInfo["h1"]);
	$htmlInfo["h1Score"] = 0;
    if ($h1count == 1) {
        $htmlInfo["h1Score"] += 100;
		$htmlInfo["contentScore"] += 16;
		$htmlInfo["finalscore"] += 6;
    }

    $h2headings = $xpath->query("//h2");
	$h2Contents = array();
    foreach ($h2headings as $h2h) {
        array_push($h2Contents, trim(strip_tags($h2h->textContent)));

	}
	$htmlInfo["h2"] = $h2Contents;
	$h2count = count($htmlInfo["h2"]);

    return $htmlInfo;

}
