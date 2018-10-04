<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * TEST NR. 03 URL FRIENDLY
 */
function checkUrlfriendlyInfo($xpath,$htmlInfo)
{
    $htmlInfo["urlfriendlyScore"] = 0;
    $viewports = $xpath->query('//meta[@name="viewport"]');

    if (!empty($viewports)) {
        $htmlInfo["viewportexists"] = false;
    } else {
		$htmlInfo["viewportexists"] = true;
		$htmlInfo["urlfriendlyScore"] += 100;
		$htmlInfo["seomobilescore"] += 33;
		$htmlInfo["finalscore"] += 6;
    }

    return $htmlInfo;
}
