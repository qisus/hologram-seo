<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * TEST NR. 13 SCRIPT MINIMIERT
 */

function checkScriptminInfo($xpath, $htmlInfo)
{

    $htmlInfo["css"] = array();
    $cssExists = $xpath->query("//link[@rel='stylesheet']");
    $htmlInfo["css"] = array_merge($htmlInfo["css"], cssFinder($cssExists, $htmlInfo));

    $htmlInfo["js"] = array();
    $jsExists = $xpath->query("//script[contains(@src, '.js')]");
    $htmlInfo["js"] = array_merge($htmlInfo["js"], jsFinder($jsExists, $htmlInfo));

    return $htmlInfo;

}

function jsFinder($jsExists, $htmlInfo)
{
	$push = array();
    $push["jsCount"] = 0;
    $push["jsMinCount"] = 0;
    $htmlInfo["jsMinScore"] = 0;
    $push["jsNotMinFiles"] = array();

    if (!empty($jsExists)) {
        foreach ($jsExists as $ce) {
            $push["jsCount"]++;
            if (formatCheckLinks($ce->getAttribute("src"))) {
                $push["jsMinCount"]++;
            } else {
                array_push($push["jsNotMinFiles"], $ce->getAttribute("src"));
            }
		}
		$diffjsCount = $push["jsCount"] - $push["jsMinCount"];
        if ($diffjsCount == 0) {
            $htmlInfo["jsMinScore"] += 100;
			$htmlInfo["speedScore"] += 33;
			$htmlInfo['finalscore'] += 6;
        }
        if ($diffjsCount >= 1) {
            $htmlInfo["jsMinScore"] += 75;
			$htmlInfo["speedScore"] += 25;
			$htmlInfo['finalscore'] += 4;
        }
        if ($diffjsCount >= 3) {
            $htmlInfo["jsMinScore"] += 50;
			$htmlInfo["speedScore"] += 17;
			$htmlInfo['finalscore'] += 2;
        }
        if ($diffjsCount >= 5) {
            $htmlInfo["jsMinScore"] += 25;
			$htmlInfo["speedScore"] += 9;
			$htmlInfo['finalscore'] += 1;
		}
		
    }
	return $push;
}

function cssFinder($cssExists, $htmlInfo)
{
	$push = array();
    $push["cssCount"] = 0;
    $push["cssMinCount"] = 0;

    $htmlInfo["cssMinScore"] = 0;
    $push["cssNotMinFiles"] = array();

    if (!empty($cssExists)) {
        foreach ($cssExists as $ce) {
            $push["cssCount"]++;
            if (formatCheckLinks($ce->getAttribute("href"))) {
                $push["cssMinCount"]++;

            } else {
                array_push($push["cssNotMinFiles"], $ce->getAttribute("href"));
            }
		}
		$diffcssCount = $push["cssCount"] - $push["cssMinCount"];

        if ($diffcssCount == 0) {
            $htmlInfo["cssMinScore"] += 100;
			$htmlInfo["speedScore"] += 34;
			$htmlInfo["finalscore"] += 6;
        }
        if ($diffcssCount >= 1) {
            $htmlInfo["cssMinScore"] += 75;
			$htmlInfo["speedScore"] += 25;
			$htmlInfo["finalscore"] += 4;
        }
        if ($diffcssCount >= 3) {
            $htmlInfo["cssMinScore"] += 50;
			$htmlInfo["speedScore"] += 17;
			$htmlInfo["finalscore"] += 2;
        }
        if ($diffcssCount >= 5) {
            $htmlInfo["cssMinScore"] += 25;
			$htmlInfo["speedScore"] += 9;
			$htmlInfo["finalscore"] += 1;
        }
    }

	return $push;
}

function formatCheckLinks($link)
{
    $cssFile = "";
    if (strpos($cssFile, '?') !== false) {
        $cssFile = substr($link, strrpos($link, "/"), strrpos($link, "?") - strrpos($link, "/"));
    } else {
        $cssFile = substr($link, strrpos($link, "/"));
    }
    if (strpos($cssFile, '.min.') !== false) {
        return true;
    } else {
        return false;
    }
}
