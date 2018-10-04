<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * TEST NR. 09 XML SITEMAP
 */

function checkForFiles($filename, $url)
{
    $handle = curl_init("http://www." . $url . "/" . $filename);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($handle);
    $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
    curl_close($handle);
    if ($httpCode == 200) {
        return true;
    } else {
        return false;
    }
}

function checkSitemapInfo($url, $htmlInfo)
{

    $htmlInfo["sitemap"] = checkForFiles("sitemap.xml", $url);
    $htmlInfo["robots"] = checkForFiles("robots.txt", $url);
	$htmlInfo["sitemapScore"] = 0;
	
    if (isset($htmlInfo["sitemap"])) {
        $htmlInfo["sitemapScore"] += 100;
		$htmlInfo["contentScore"] += 16;
		$htmlInfo["finalscore"] += 6;
    }

    return $htmlInfo;

}
