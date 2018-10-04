<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * TEST NR. 06 RICH SNIPPETS
 */

function checkRichsnippetsInfo($xpath, $htmlInfo)
{

    $richsnippets = $xpath->query("//itemscope");
    $htmlInfo["richSnippetScore"] = 0;
    
    $htmlInfo["richsnippet"] = array();
    foreach ($richsnippets as $richsnippet) {
        array_push($htmlInfo["richsnippet"], $richsnippet->getAttribute("itemtype"));
    }
    if (count($htmlInfo["richsnippet"]) > 0)  {
        $htmlInfo["richSnippetScore"] += 100;
		$htmlInfo["serpViewscore"] += 34;
		$htmlInfo["finalscore"] += 6;
    }

    return $htmlInfo;

}
