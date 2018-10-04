<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * TEST NR. 12 LOADING TIME
 */

/**
 * Calculate simple load time of HTML page
 */

function getPageLoadTime($start, $end)
{
    if (!is_null($start) && !is_null($end)) {
        return $end - $start;
    } else {
        return 0;
    }
}

function checkPageLoadTime($start, $end, $htmlInfo)
{
    $htmlInfo["speedScore"] = 0;
    $htmlInfo["loadTimeScore"] = 0;

    $htmlInfo["pageLoadTime"] = getPageLoadTime($start, $end);

    if ($htmlInfo["pageLoadTime"] >= 7) {
        $htmlInfo["loadTimeScore"] += 25;
        $htmlInfo["speedScore"] += 9;
        $htmlInfo["finalscore"] += 1;
    }
    else if ($htmlInfo["pageLoadTime"] >= 5) {
        $htmlInfo["loadTimeScore"] += 50;
        $htmlInfo["speedScore"] += 17;
        $htmlInfo["finalscore"] += 2;
    }
    else if ($htmlInfo["pageLoadTime"] > 1) {
        $htmlInfo["loadTimeScore"] += 75;
        $htmlInfo["speedScore"] += 25;
        $htmlInfo["finalscore"] += 4;
    }
    else if ($htmlInfo["pageLoadTime"] <= 1) {
        $htmlInfo["loadTimeScore"] += 100;
        $htmlInfo["speedScore"] += 33;
        $htmlInfo["finalscore"] += 6;
    }

    $htmlInfo["pageLoadTime"] = round($htmlInfo["pageLoadTime"] * 20, 0) / 20;

    return $htmlInfo;
}
