<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * TEST NR. 04 TITLE TAG
 */

function checkTitleInfo($xpath, $htmlInfo)
{
    $htmlInfo["serpViewscore"] = 0;
    $htmlInfo["titleLengthScore"] = 0;
    
    $title = $xpath->query("//title");

    foreach ($title as $tit) {
        $titleContent = $tit->textContent;

        $htmlInfo["titleText"] = $titleContent;
        $htmlInfo["titleLength"] = mb_strlen($titleContent, 'utf8');
        if ($htmlInfo["titleLength"] <= 48) {
            $htmlInfo["titleLengthScore"] += 40;
            $htmlInfo["serpViewscore"] += 9;
            $htmlInfo['finalscore'] += 1;
        }else if ($htmlInfo["titleLength"] <= 58) {
            $htmlInfo["titleLengthScore"] += 50;
            $htmlInfo["serpViewscore"] += 17;
            $htmlInfo['finalscore'] += 2;
        }else if ($htmlInfo["titleLength"] <= 68) {
            $htmlInfo["titleLengthScore"] += 75;
            $htmlInfo["serpViewscore"] += 25;
            $htmlInfo['finalscore'] += 4;
        }else if ($htmlInfo["titleLength"] <= 78) {
            $htmlInfo["titleLengthScore"] += 100;
            $htmlInfo["serpViewscore"] += 33;
            $htmlInfo["finalscore"] += 6;
        }
    }

    return $htmlInfo;

}