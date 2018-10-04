<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * HTMLINFO
 */

function getReadyHTML($htmlInfo, $url)
{
    //title + table head
    $html = <<<EOD
    <div id="seoreport" style="margin:8rem;">
        <table border="1" border-collapse: collapse; cellpadding="2" cellspacing="2"style="border-color:white;width:100%;">
        <thead><tr><th></th><th>YOUR SEO REPORT FOR $url </th><th></th></tr></thead>
EOD;
$html .= '<br>';
$html .= $htmlInfo["serpViewscore"];
$html .= '<br>';
$html .=$htmlInfo["contentScore"];
$html .= '<br>';
$html .= $htmlInfo["speedScore"];
$html .= '<br>';
$html .= $htmlInfo["socialScore"];


    //final score + URL + GroupScore Chart
    $html .= <<<EOD
    <div id="seoreport" style="margin:8rem;">
    <tbody>
    <tr><td colspan="3" align="center">final score</td></tr>
    <tr><td colspan="3" align="center">
        <div display:flex;justify-content:space-around;>
            <ul style="width:30%;height:100px;margin:0;padding:0;position:relative;">
                <li style="height:70px;bottom:0;background-color:white;list-style:none;position:absolute;width:40px;left:0px;"></li>
                <li style="height:20px;bottom:0;background-color:white;list-style:none;position:absolute;width:40px;left:90px;"></li>
                <li style="height:60px;bottom:0;background-color:white;list-style:none;position:absolute;width:40px;left:180px;"></li>
                <li style="height:30px;bottom:0;background-color:white;list-style:none;position:absolute;width:40px;left:270px;"></li>
                <li style="height:50px;bottom:0;background-color:white;list-style:none;position:absolute;width:40px;left:360px;"></li>
            </ul>
        </div>
    </td></tr>
    <tr><td colspan="3" align="center">
        <div display:flex;justify-content:space-around;>
            <ul style="width:31%;height:20px;margin:0;padding:0;position:relative;">
                <li style="bottom:0;list-style:none;position:absolute;left:0px;">SEO MOBILE</li>
                <li style="bottom:0;list-style:none;position:absolute;left:90px;">SERP VIEW</li>
                <li style="bottom:0;list-style:none;position:absolute;left:180px;">CONTENT</li>
                <li style="bottom:0;list-style:none;position:absolute;left:270px;">PAGE SPEED</li>
                <li style="bottom:0;list-style:none;position:absolute;left:360px;">SOCIAL LINKS</li>
            </ul>
        </div>
    </td></tr>
EOD;

    //********************** group1: seo mobile **********************
    $html .= <<<EOD
    <tr><td colspan="3"><span>SEO MOBILE</span></td></tr>
        <tr>
        <td colspan="2">Is your site reachable?</td>
        <td rowspan="6">
            <div class="infotab" min-width:50%;padding:20px;>
            <input id="tab1" type="radio" name="tabs" checked><label for="tab1">Mobile SEO</label>
            <input id="tab2" type="radio" name="tabs"><label for="tab2">Mobile Index First</label>
            <input id="tab3" type="radio" name="tabs"><label for="tab3">Our Tips</label>
            <section id="content1"><img src="assets/img/screenshot.png" max-height="50%"><p>In short: the number of mobile searches is EXPLODING. In fact, 58% of all searches in Google are now done from a mobile device. Google is overhauling their entire algorithm so that it’s optimized for mobile users FIRST. Needless to say, “SEO” Now About Optimizing for “Mobile SEO”.</p></section>
            <section id="content2"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdf</p></section>
            <section id="content3"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdfdf</p></section>
            </div>
        </td>
        </tr>
            <tr>
                <td><div><img src="assets/img/screenshot.png"></div></td>
                <td><div><span>Congratulations. Your site {$url} is alive. </span></div></td>
            </tr>
        <tr><td colspan="2">Does Google crawl your content?</td></tr>
            <tr>
                <td><div><img src="assets/img/screenshot.png" max-height="50%"></div></td>
                <td><div><span>Is the content showing up? Are navigation links present?</span></div></td>
            </tr>
        <tr><td colspan="2">Do you have "mobile friendly" meta label?</td></tr>
            <tr>
                <td><div><img scr="assets/img/screenshot.png" height="50%"></div></td>


                </div></td>
            </tr>
EOD;

    //********************** group1: seo mobile **********************

    // Does Google crawl your content?
    $html .= '<tr><td colspan="2">Does Google crawl your content?</td></tr>';
    $html .= '<tr>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Screenshots</span></div>';
    $html .= '</td>';
    //result
    $html .= '<td>';
    $html .= '<div"><span style="font-size:11px;">Results</span></div>';
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div style="background:#fff;min-width:320px;max-width:800px;padding:50px;margin: 0 auto;"><input id="tab1" type="radio" name="tabs" checked><label for="tab1">Codepen</label>
                    <input id="tab2" type="radio" name="tabs"><label for="tab2">Dribbble</label>
                    <input id="tab3" type="radio" name="tabs"><label for="tab3">Dropbox</label>
                    <section id="content1"><p>In short: the number of mobile searches is EXPLODING. In fact, 58% of all searches in Google are now done from a mobile device. Google is overhauling their entire algorithm so that it’s optimized for mobile users FIRST. Needless to say, “SEO” Now About Optimizing for “Mobile SEO”.</p></section>
                    <section id="content2"><p></p></section>
                    <section id="content3"><p></p></section>
                    </div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test02

    //test 03: url friendly
    $html .= '<tr><td colspan="2">Is your URL friendly?</td></tr>';
    $html .= '<tr>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Img of Url</span></div>';
    $html .= '</td>';
    //result
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Results</span></div>';
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">URL friendly Infos</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test03

    //********************** group2: infos on serp (search engine ranking page)**********************
    $html .= '<tr><td colspan="3"><strong>SERP VIEW</strong></td></tr>';

    //test 04: title tag
    $html .= '<tr><td colspan="3">Does your title tag have the correct length?</td></tr>';
    $html .= '<tr>';
    //result
    $html .= '<td>';
    if (isset($htmlInfo["titletext"])) {
        $html .= '<span style="font-size:11px;"><u>' . $htmlInfo["titletext"] . '</u></span><br>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">title tag Infos</span></div>';
    $html .= '</td>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Img of title tag at SERP</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test04

    //test 05: meta description
    $html .= '<tr><td colspan="3">Does Your Meta Description Have The Correct Length?</td></tr>';
    $html .= '<tr>';
    //result
    $html .= '<td>';
    if (isset($htmlInfo["description"])) {
        $html .= '<div><span style="font-size:11px;">The meta description of your page has a length of ' . strlen($htmlInfo["description"]) . ' characters. Most search engines will truncate meta descriptions to 160 characters. <br> -> <strong>' . $htmlInfo["description"] . '</strong> </span></div>';
    } else {
        $html .= '<div><span style="font-size:11px;">Your page doesn\'t have meta description. </span></div>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">meta description Infos</span></div>';
    $html .= '</td>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Img of meta description at SERP</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test05

    //test 06: rich snippets
    $html .= '<tr><td colspan="3">Does your site have any rich snippets?</td></tr>';
    $html .= '<tr>';
    //result
    $html .= '<td>';
    if (isset($htmlInfo["richsnippet"])) {
        //$html .= '<div><span style="font-size:11px;"><strong>'.$htmlInfo["description"].'</strong> </span></div>';
    } else {
        $html .= '<div><span style="font-size:11px;">Your page doesn\'t have any rich snippets. </span></div>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">rich snippet Infos</span></div>';
    $html .= '</td>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Img of rich snippets</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test06

    //********************** group3: content **********************
    $html .= '<tr><td colspan="3"><strong>CONTENT</strong></td></tr>';

    //test 07: https / http = mixed content
    $html .= '<tr><td colspan="3">Does your site secure? Does it have mix content?</td></tr>';
    $html .= '<tr>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Screenshots</span></div>';
    $html .= '</td>';
    //result
    $html .= '<td>';
    if ($htmlInfo["https"] = true) {
        $html .= '<div><span style="font-size:11px;">Your Site is secure.</span></div>';
    } else {
        $html .= '<div><span style="font-size:11px;">Youre Site is not secure. Get a certificate.</span></div>';
    }
    if ($htmlInfo["mixcontent"] = false) {
        $html .= '<div><span style="font-size:11px;">Your Site does not have any mixed content. </span></div>';
    } else {
        //$html .= '<div><span style="font-size:11px;">Youre site has mixed content.<br>'.$htmlInfo [ "http" ].'br'.$htmlInfo [ "https" ].'</span></div>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">SEO Mobile Infos</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test07

    //test 08: heading
    $html .= '<tr><td colspan="3">Does your site have more than one h1 tag?</td></tr>';
    $html .= '<tr>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Screenshots</span></div>';
    $html .= '</td>';
    //result
    $html .= '<td>';
    if (isset($htmlInfo["h1"])) {
        $html .= '<span style="font-size:10px;">Your pages having these H1 headigs.</span>';
        foreach ($htmlInfo["h1"] as $h1) {
            $html .= '<br>-> <span style="font-weight:bold;font-size:10px;color:#000000;">' . $h1 . '</span> ';
        }
    } else {
        $html .= '<span style="font-size:10px;">Your page doesn\'t have H1 tags.</span>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Infos</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test08

    //test 09: xml site
    $html .= '<tr><td colspan="3">Does your site have a xml sitemap?</td></tr>';
    $html .= '<tr>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Screenshots</span></div>';
    $html .= '</td>';
    //result
    $html .= '<td>';
    if ($htmlInfo["robots"] == 200) {
        $html .= '<span style="font-size:10px;">Congratulations! We\'ve found sitemap file for your website: <span style="color:blue">http://' . $htmlInfo["url"] . '/sitemap.xml</span></span>';
    } else {
        $html .= '<span style="font-size:10px;">Your page doesn\'t have "sitemap.xml" file. </span>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Infos</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test09

    //test 10: hreflang
    $html .= '<tr><td colspan="3">Does your site have the correct structure for multiple languages?</td></tr>';
    $html .= '<tr>';
    //picture
    $html .= '<td>';
    $html .= '<div ><span style="font-size:11px;">Screenshots</span></div>';
    $html .= '</td>';
    //result
    $html .= '<td>';
    if ($htmlInfo["hreflangexists"] = false) {
        $html .= '<div style=""><span style="font-size:11px;">If you have more than one language on your site, your site has duplicate content and should use a hreflang. </span></div>';
    } else {
        $html .= '<div style=""><span style="font-size:11px;">Your site has a hreflang.</span></div>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Infos</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test10

    //test 11: img alt tag
    $html .= '<tr><td colspan="3">Do all of your images have alt-tags?</td></tr>';
    $html .= '<tr>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Screenshots</span></div>';
    $html .= '</td>';
    //result
    $html .= '<td>';
    if (!empty($htmlInfo["images"])) {
        if (isset($htmlInfo["images"]["totImgs"]) && $htmlInfo["images"]["totImgs"] != 0) {
            if ($htmlInfo["images"]["diff"] <= 0) {
                $html .= '<span style="font-size:10px;">Congratulations! ' . $htmlInfo["images"]["totImgs"] . ' images found in your page, and all have "ALT" text. </span>';
            } else {
                $html .= '<span style="font-size:10px;">' . $htmlInfo["images"]["totImgs"] . ' images found in your page and ' . $htmlInfo["images"]["diff"] . ' images are without "ALT" text.</span>';
            }
        } else {
            $html .= '<span style="font-size:10px;">Your pages does not have any images</span>';
        }
    } else {
        $html .= '<span style="font-size:10px;">Your pages does not have any images</span>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Infos</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test11

    //********************** group4: speed **********************
    $html .= '<tr><td colspan="3"><strong>SPEED</strong></td></tr>';

    //test 12 loading time
    $html .= '<tr><td colspan="3">Does your site load under 1 second?</td></tr>';
    $html .= '<tr>';
    //result
    $html .= '<td>';
    if ($htmlInfo["pageLoadTime"] !== 0) {
        $html .= '<div style="font-size:10px;">Your site loading time is around <strong>' . $htmlInfo["pageLoadTime"] . ' seconds</strong> and the average loading speed of any website which is <strong>5 seconds</strong> required. </div>';
    } else {
        $html .= '<div style="font-size:10px;">Unable to get load time of your site.</div>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Infos</span></div>';
    $html .= '</td>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Screenshot</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test12

    //test 13a css script mini
    $html .= '<tr><td colspan="3">Are your css scripts compressed?</td></tr>';
    $html .= '<tr>';
    //result
    $html .= '<td>';
    if (!empty($htmlInfo["css"])) {
        if ($htmlInfo["css"]["cssCount"] > 0) {
            $html .= '<span style="font-size:10px;">Your page having ' . $htmlInfo["css"]["cssCount"] . ' external css files </span>';
            if ($htmlInfo["css"]["cssMinCount"] > 0) {
                $html .= '<span style="font-size:10px;">and out of them ' . $htmlInfo["css"]["cssMinCount"] . ' css files are minified.</span>';
            } else {
                $html .= '<span style="font-size:10px;">and no file is minified.</span>';
            }

            if (!empty($htmlInfo["css"]["cssNotMinFiles"])) {
                $html .= '<br><span style="font-size:10px;">Following files are not minified : </span>';
                foreach ($htmlInfo["css"]["cssNotMinFiles"] as $cNMF) {
                    $html .= '<br><span style="font-size:10px;color:blue;">' . $cNMF . '</span>';
                }
            }
        } else {
            $html .= '<span style="font-size:10px;">No external css found.</span>';
        }
    } else {
        $html .= '<span style="font-size:10px;">No external css found.</span>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Infos</span></div>';
    $html .= '</td>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Screenshot</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test13a

    //test 13b js script mini
    $html .= '<tr><td colspan="3">Are your js scripts compressed?</td></tr>';
    $html .= '<tr>';
    //result
    $html .= '<td>';
    if (!empty($htmlInfo["js"])) {
        if ($htmlInfo["js"]["jsCount"] > 0) {
            $html .= '<span style="font-size:10px;">Your page having ' . $htmlInfo["js"]["jsCount"] . ' external js files </span>';
            if ($htmlInfo["js"]["jsMinCount"] > 0) {
                $html .= '<span style="font-size:10px;">and out of them ' . $htmlInfo["js"]["jsMinCount"] . ' js files are minified.</span>';
            } else {
                $html .= '<span style="font-size:10px;">and no file is minified.</span>';
            }

            if (!empty($htmlInfo["js"]["jsNotMinFiles"])) {
                $html .= '<br><span style="font-size:10px;">Following files are not minified : </span>';
                foreach ($htmlInfo["js"]["jsNotMinFiles"] as $jNMF) {
                    $html .= '<br><span style="font-size:10px;color:blue;">' . $jNMF . '</span>';
                }
            }
        } else {
            $html .= '<span style="font-size:10px;">No external js found.</span>';
        }
    } else {
        $html .= '<span style="font-size:10px;">No external js found.</span>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Infos</span></div>';
    $html .= '</td>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Screenshot</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test12

    //********************** group5: social **********************
    $html .= '<tr><td colspan="3"><strong>SOCIAL LINKS</strong></td></tr>';

    //test 14 social open graphs
    $html .= '<tr><td colspan="3">Does your site have social open graph links?</td></tr>';
    $html .= '<tr>';
    //picture
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">Screenshots</span></div>';
    $html .= '</td>';
    //result
    $html .= '<td>';
    if (isset($htmlInfo["opengraph"])) {
        $html .= '<span style="font-size:10px;">Your pages having these open graphs.</span>';
        foreach ($htmlInfo["opengraph"] as $opengraph) {
            $html .= '<br>-> <span style="font-weight:bold;font-size:10px;color:#000000;">' . $opengraph . '</span> ';
        }
    } else {
        $html .= '<span style="font-size:10px;">Your page doesn\'t have H1 tags.</span>';
    }
    $html .= '</td>';
    //info
    $html .= '<td>';
    $html .= '<div><span style="font-size:11px;">SEO Mobile Infos</span></div>';
    $html .= '</td>';
    $html .= '</tr>'; //end test07

    //********************** button für pdf export **********************
    $html .= '<tr>';
    $html .= '<div><form action="/functions/16export2pdf.php" method="post"><button type="submit">EXPORT PDF</button></div>';
    $html .= '</tr>';
    $html .= '</tbody>';

    $html .= '</table>';
    $html .= '</div>';

    return $html;

}
