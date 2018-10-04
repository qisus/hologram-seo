<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * TEST NR. 11 Image Alt-Tag Checker
 */

function checkImageAlts($xpath, $htmlInfo)
{

    $imgs = $xpath->query("//img");
	$diff = 0;

    if (!empty($imgs)) {
		$totImgs = 0;
		$totAlts = 0;
	
		foreach ($imgs as $im) {
			$totImgs++;
			if (!empty($im->getAttribute("alt"))) {
				$totAlts++;
			}
		}

        $htmlInfo["images"] = array("totImgs" => $totImgs, "totAlts" => $totAlts, "diff" => ($totImgs - $totAlts));
    }

	$htmlInfo["ImageAltsScore"] = 0;

    if ($diff == 0) {
        $htmlInfo["ImageAltsScore"] += 100;
		$htmlInfo["contentScore"] += 20;
		$htmlInfo["finalscore"] += 6;
    }
    if ($diff >= 5) {
        $htmlInfo["ImageAltsScore"] += 75;
		$htmlInfo["contentScore"] += 15;
		$htmlInfo["finalscore"] += 4;
    }
    if ($diff >= 15) {
        $htmlInfo["ImageAltsScore"] += 50;
		$htmlInfo["contentScore"] += 10;
		$htmlInfo["finalscore"] += 2;
    }
    if ($diff >= 25) {
        $htmlInfo["ImageAltsScore"] += 25;
		$htmlInfo["contentScore"] += 5;
		$htmlInfo["finalscore"] += 1;
    }
    
    return $htmlInfo;
}