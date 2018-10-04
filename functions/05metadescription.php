<?php

function checkMetadescriptionInfo($xpath, $htmlInfo){

    $htmlInfo["metadescriptionScore"] = 0;

    $metas = $xpath->query("//meta[@name='description']");

    foreach($metas as $meta){
        $htmlInfo["description"] = $meta->getAttribute('content');
        $htmlInfo["descriptionlength"] = mb_strlen($htmlInfo["description"], 'utf8');
        if ($htmlInfo["descriptionlength"] <= 40) {
            $htmlInfo["metadescriptionScore"] += 40;
            $htmlInfo["serpViewscore"] += 9;
            $htmlInfo["finalscore"] += 1;
        }
        else if ($htmlInfo["descriptionlength"] <= 80) {
            $htmlInfo["metadescriptionScore"] += 50;
            $htmlInfo["serpViewscore"] += 17;
            $htmlInfo["finalscore"] += 2;
        }
        else if ($htmlInfo["descriptionlength"] <= 120) {
            $htmlInfo["metadescriptionScore"] += 75;
            $htmlInfo["serpViewscore"] += 25;
            $htmlInfo["finalscore"] += 4;
        }
        else if ($htmlInfo["descriptionlength"] <= 160) {
            $htmlInfo["metadescriptionScore"] += 100;
            $htmlInfo["serpViewscore"] += 33;
            $htmlInfo["finalscore"] += 6;
        }
      }



    return $htmlInfo;

}
?>