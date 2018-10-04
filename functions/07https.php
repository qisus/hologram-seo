<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * TEST NR. 07 https / http / mixed content
 */

function checkHttpsInfo($xpath, $htmlInfo)
{

    $htmlInfo["http"] = array();
    $htmlInfo["https"] = array();

    $httpexists = $xpath->query("//http");
    $httpsexists = $xpath->query("//https");

    $htmlInfo["contentScore"] = 0;
    $htmlInfo["httpsScore"] = 0;

    if (!empty($httpexists) xor !empty($httpsexists)) {
        $htmlInfo["mixcontent"] = false;
        $htmlInfo["mixcontentScore"] += 100;
		$htmlInfo["contentScore"] += 16;
		$htmlInfo["finalscore"] += 6;
    }

    if (!empty($httpexists)) {
        $htmlInfo["https"] = true;
        $htmlInfo["httpsScore"] += 100;
		$htmlInfo["contentScore"] += 16;
		$htmlInfo["finalscore"] += 6;
	}
	
	return $htmlInfo;
}
