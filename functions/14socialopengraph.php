<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * TEST NR. 14 opengraph social media
 */

function checkOpengraphInfo($xpath, $htmlInfo)
{

    $htmlInfo["opengraph"] = array();
    $htmlInfo["socialScore"] = 0;
    $htmlInfo["openGraphScore"] = 0;

	//$opengraphs = $xpath->query('//meta property="og');
	$opengraphs = $xpath->query('//meta[@property="og"]');
	
    //$opengraphs = $xpath->query('//meta name="twitter');

    foreach ($opengraphs as $opengraph) {
        $htmlInfo["opengraph"]->getAttribute('content');
	}
	$htmlInfo["opengraphCount"] = count($htmlInfo["opengraph"]);

    if ($htmlInfo["opengraphCount"] >= 1) {
        $htmlInfo["openGraphScore"] += 100;
		$htmlInfo["socialScore"] += 100;
		$htmlInfo["finalscore"] += 6;
    }

    return $htmlInfo;

}
