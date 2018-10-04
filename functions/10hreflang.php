<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * TEST NR. 10 Hreflang
 */

function checkHreflangInfo($xpath, $htmlInfo)
{
    $htmlInfo["hreflang"] = array();
    $htmlInfo["hreflangScore"] = 0;

    $hreflangs = $xpath->query("//hreflang");

    if (!empty($hreflangs)) {
        $htmlInfo["hreflangexists"] = false;
    } else {
        $htmlInfo["hreflangScore"] += 100;
		$htmlInfo["contentScore"] += 16;
		$htmlInfo["finalscore"] += 6;
    }

    return $htmlInfo;
}
