<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * FUNKTION START
 */

include '00allfunctions.php';

//*********************************** IF VALID URL ************************************* //
if (filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
    $url = $_POST["url"];
    echo (getSeoReport($url));
} else {
    echo ("$url is not a valid URL");
    echo '<br><a href="index.php"><button>TRY AGAIN</button></a>';
}

//*********************************** HTML DATA WIEDERGEBEN FALLS VORHANDEN ************ //
if (isset($reqHTML)) {
    echo $reqHTML;
}

//*********************************** GET SEO REPORT ************************************ //
function getSeoReport($url)
{

// 1. GRABHTML with CURL
    function grabHTML($url)
    {
        set_time_limit(0);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 2);
        if (strtolower(parse_url($url, PHP_URL_SCHEME)) == 'https') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        }
        $str = curl_exec($ch);
        curl_close($ch);

        return ($str) ? $str : false;
    }

    $start = microtime(true);
    $grabbedHTML = grabHTML($url);
    $end = microtime(true);

// 2. convert HTML into xpath => result $xpath
    $html = new DOMDocument();
    $html->loadHTML($grabbedHTML);
    $xpath = new DOMXPATH($html);

// 3. save seo test results into $htmlInfo
    $htmlInfo = array();

    $htmlInfo["url"] = $url;
    $htmlInfo = array_change_key_case($htmlInfo, CASE_LOWER);

    //merge all tests
    //01
    $htmlInfo["isAliveScore"] = 100;
    $htmlInfo["seomobilescore"] = 34;
	$htmlInfo["finalscore"] = 10;
    //02
    //$htmlInfo = checkCrawlingInfo($xpath, $htmlInfo);
    //03
    $htmlInfo = checkUrlfriendlyInfo($xpath, $htmlInfo);
    //04
    $htmlInfo = checkTitleInfo($xpath, $htmlInfo);
    //05
    $htmlInfo = checkMetadescriptionInfo($xpath, $htmlInfo);
    //06
    $htmlInfo = checkRichsnippetsInfo($xpath, $htmlInfo);
    //07
    $htmlInfo = checkHttpsInfo($xpath, $htmlInfo);
    //08
    $htmlInfo = checkHeadingsInfo($xpath, $htmlInfo);
    //09
    $htmlInfo = checkSitemapInfo($url, $htmlInfo);
    //10
    $htmlInfo = checkHreflangInfo($xpath, $htmlInfo);
    //11
    $htmlInfo = checkImageAlts($xpath, $htmlInfo);
    //12
    $htmlInfo = checkPageLoadTime($start, $end, $htmlInfo);
    //13
    $htmlInfo = checkScriptminInfo($xpath, $htmlInfo);
    //14
    $htmlInfo = checkOpengraphInfo($xpath, $htmlInfo);
    

    $reqHTML = getReadyHTML($htmlInfo, $url);

    exportSEOReportPDF($htmlInfo, $url, $reqHTML);

    return $reqHTML;

} //end function getSeoReport
