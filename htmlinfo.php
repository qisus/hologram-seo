<?php

/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * HTMLINFO
 */

function getReadyHTML($htmlInfo, $url)
{


 // alle test scores transforms to script variable 
$html .= '<script>';
$html .= 'window.results = {';
$html .=    'isAliveScore: "' . $htmlInfo["isAliveScore"] . '",';
//$html .=    'crawlingScore: "' . $htmlInfo["crawlingScore"] . '"';
$html .=    'urlfriendlyScore: "' . $htmlInfo["urlfriendlyScore"] . '"';
$html .=    'titleLengthScore: "' . $htmlInfo["titleLengthScore"] . '"';
$html .=    'metadescriptionScore: "' . $htmlInfo["metadescriptionScore"] . '"';
$html .=    'richSnippetScore: "' . $htmlInfo["richSnippetScore"] . '"';
$html .=    'httpsScore: "' . $htmlInfo["httpsScore"] . '"';
$html .=    'mixcontentScore: "' . $htmlInfo["mixcontentScore"] . '"';
$html .= '};';
$html .= '</script>';

    //css grid container
    //title + table head
    $html = <<<EOD
    <div class="container4">
EOD;

    //final score + URL + GroupScore Chart
    $html .= <<<EOD
    <div class="item title box-long center"><h1>SEO Report</h1></div>
    <div style="padding:0;" class="item finalscoreform box-long center">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.39 257.88"><defs><style>.cls-1,.cls-2{fill:#2d7b79;}.cls-2{font-size:57px;font-family:Montserrat-Bold, Montserrat;font-weight:700;}</style></defs><title>Final Score Graphic</title><g id="finalscoreform"><path class="cls-1" d="M53.18,130.36a95.08,95.08,0,0,0,13.58,23.57l0,0,70.72,103.94h8.46l70.68-103.94a95.08,95.08,0,0,0,14.08-24.86A187.1,187.1,0,0,0,274.93,95.2a187.1,187.1,0,0,0-44.27-33.88A95.23,95.23,0,0,0,53.18,60,187.07,187.07,0,0,0,6.54,95.2,187.07,187.07,0,0,0,53.18,130.36ZM233.82,71.21a178.83,178.83,0,0,1,31.2,24,178.83,178.83,0,0,1-31.2,24,95.85,95.85,0,0,0,0-48ZM141.67,251.65l-52.36-77a95.17,95.17,0,0,0,104.66,0Zm0-68.25a88.29,88.29,0,0,1-78.56-48.13,186,186,0,0,0,77.63,16.86,185.9,185.9,0,0,0,80.06-18A88.3,88.3,0,0,1,141.67,183.4Zm0-176.4A88.3,88.3,0,0,1,220.8,56.27,187.06,187.06,0,0,0,63.11,55.13,88.3,88.3,0,0,1,141.67,7ZM58.8,65Q64,62.33,69.38,60A180.28,180.28,0,0,1,212.1,60q6.58,2.85,12.87,6.2a88.2,88.2,0,0,1,0,58q-6.29,3.34-12.87,6.2a178.43,178.43,0,0,1-71.36,14.72,178.43,178.43,0,0,1-71.36-14.72q-5.39-2.33-10.58-5A88.27,88.27,0,0,1,58.8,65ZM49.88,69.9a95.7,95.7,0,0,0,0,50.61A178.72,178.72,0,0,1,16.46,95.2,178.72,178.72,0,0,1,49.88,69.9Z" transform="translate(-6.54)"/></g><g id="finalscoretext"><path class="cls-1" d="M73.3,116.3l-1.45,3.4c2.59,1.11,3.89,1.63,6.5,2.63l-.92,2.43c-2.66-1-4-1.54-6.6-2.67l-2,4.69c-1.35-.58-2-.87-3.36-1.48l5.76-12.76c4,1.82,6.09,2.67,10.21,4.21l-.91,2.44C77.61,118.11,76.17,117.53,73.3,116.3Z" transform="translate(-6.54)"/><path class="cls-1" d="M83.58,117.55c1.27.46,1.9.68,3.18,1.11l-4.47,13.27c-1.38-.46-2.07-.7-3.44-1.2Z" transform="translate(-6.54)"/><path class="cls-1" d="M102.84,123.19l-3.13,13.65-2.89-.69c-2.22-4-3.25-6.09-5.16-10.19l-2.39,8.16c-1.38-.4-2.06-.61-3.43-1L90,119.72l2.65.81c1.8,4.08,2.77,6.11,4.88,10.14l2.06-8.25C100.91,122.74,101.55,122.89,102.84,123.19Z" transform="translate(-6.54)"/><path class="cls-1" d="M113.88,136.47c-2.81-.42-4.22-.66-7-1.19-.76,1.08-1.14,1.61-1.92,2.68-1.45-.29-2.18-.44-3.63-.76,3.92-4.87,5.79-7.36,9.3-12.42,1.3.23,1.94.34,3.24.55,1.66,5.94,2.6,8.9,4.69,14.79-1.5-.18-2.25-.28-3.75-.49C114.43,138.37,114.24,137.73,113.88,136.47Zm-.72-2.6c-.62-2.27-.91-3.4-1.47-5.67-1.28,2-1.93,2.93-3.26,4.87C110.32,133.41,111.26,133.57,113.16,133.87Z" transform="translate(-6.54)"/><path class="cls-1" d="M121.72,126.4c1.32.15,2,.21,3.31.34L124,138c3.06.28,4.6.39,7.66.54l-.13,2.64c-4.55-.22-6.83-.4-11.36-.91Z" transform="translate(-6.54)"/><path class="cls-1" d="M141.37,141.22a8.3,8.3,0,0,1-2.75-1.18c.49-1,.74-1.46,1.22-2.43a8,8,0,0,0,2.34,1.05,9.08,9.08,0,0,0,2.72.35,4.56,4.56,0,0,0,2.22-.48,1.22,1.22,0,0,0,.68-1.12,1,1,0,0,0-.46-.81,3.36,3.36,0,0,0-1.1-.49c-.44-.12-1-.25-1.79-.39a21.85,21.85,0,0,1-2.82-.72,4.44,4.44,0,0,1-1.87-1.22,3.15,3.15,0,0,1-.76-2.24,3.83,3.83,0,0,1,.7-2.21,4.69,4.69,0,0,1,2-1.57,9,9,0,0,1,3.32-.64,12.09,12.09,0,0,1,2.69.22,8.54,8.54,0,0,1,2.35.8c-.35,1-.54,1.51-.9,2.51a8.84,8.84,0,0,0-4.09-.94,4,4,0,0,0-2.08.49,1.34,1.34,0,0,0-.66,1.17,1.13,1.13,0,0,0,.8,1.06,12.64,12.64,0,0,0,2.44.63,27.6,27.6,0,0,1,2.81.65,4.8,4.8,0,0,1,1.93,1.1,3.1,3.1,0,0,1,.92,2.17,3.56,3.56,0,0,1-.6,2.23,4.8,4.8,0,0,1-2.13,1.68,9.47,9.47,0,0,1-3.6.71A13,13,0,0,1,141.37,141.22Z" transform="translate(-6.54)"/><path class="cls-1" d="M157,140a7.08,7.08,0,0,1-3.19-2.32,6.59,6.59,0,0,1-1.34-3.64,7,7,0,0,1,.77-3.8,7.41,7.41,0,0,1,2.6-2.81,8.92,8.92,0,0,1,3.88-1.34,9,9,0,0,1,3.43.21,7.12,7.12,0,0,1,2.79,1.46c-.74.89-1.12,1.33-1.88,2.21a4.9,4.9,0,0,0-3.86-1.16,5.19,5.19,0,0,0-2.34.83,4.26,4.26,0,0,0-1.51,1.75,4.51,4.51,0,0,0-.39,2.37,4.36,4.36,0,0,0,.82,2.25,4.14,4.14,0,0,0,1.88,1.41,5.35,5.35,0,0,0,2.58.29,4.92,4.92,0,0,0,3.6-2.14c1,.64,1.51,1,2.53,1.57a6.87,6.87,0,0,1-2.45,2.23,9.54,9.54,0,0,1-3.56,1.09A9.24,9.24,0,0,1,157,140Z" transform="translate(-6.54)"/><path class="cls-1" d="M172.83,137.81a7.12,7.12,0,0,1-3.42-2,6.54,6.54,0,0,1-1.65-3.49,6.9,6.9,0,0,1,.44-3.83,7.47,7.47,0,0,1,2.37-3,9.68,9.68,0,0,1,7.95-1.64,7.59,7.59,0,0,1,3.39,1.85,6.84,6.84,0,0,1,1.94,3.34,6.48,6.48,0,0,1-.14,3.86,7.23,7.23,0,0,1-2.34,3.23,10.07,10.07,0,0,1-8.54,1.77Zm6.2-3.69a4.19,4.19,0,0,0,1.32-1.93,4.35,4.35,0,0,0,.07-2.4,4.5,4.5,0,0,0-1.12-2.12,4.32,4.32,0,0,0-2-1.19,5.26,5.26,0,0,0-4.6,1,4.31,4.31,0,0,0-1.33,1.87,4.5,4.5,0,0,0-.18,2.39,4.35,4.35,0,0,0,1,2.17,4.19,4.19,0,0,0,2,1.25,5.44,5.44,0,0,0,4.81-1Z" transform="translate(-6.54)"/><path class="cls-1" d="M197.81,132.14c-1.64-1.1-2.45-1.65-4.05-2.79l-.17.05c-1.18.37-1.77.55-3,.9l1.1,3.74c-1.39.41-2.09.61-3.49,1l-3.68-13.51c2.42-.66,3.62-1,6-1.76a8.79,8.79,0,0,1,3.38-.44,5.15,5.15,0,0,1,2.66.95,4.71,4.71,0,0,1,1.64,2.29,4.44,4.44,0,0,1,.13,2.81,5,5,0,0,1-1.64,2.39c1.88,1.27,2.83,1.89,4.77,3.11C200,131.39,199.29,131.64,197.81,132.14Zm-4.21-9.91a3.81,3.81,0,0,0-2.42.11l-2.66.8,1.38,4.68,2.73-.83a3.76,3.76,0,0,0,2.09-1.34,2.14,2.14,0,0,0,.21-2A2.18,2.18,0,0,0,193.6,122.23Z" transform="translate(-6.54)"/><path class="cls-1" d="M214.21,122.94l1.07,2.37c-4.49,2-6.76,3-11.34,4.67l-4.89-13.12c4.13-1.54,6.17-2.38,10.22-4.2l1.07,2.37c-2.86,1.28-4.3,1.89-7.2,3l1.12,2.83c2.61-1,3.9-1.57,6.47-2.71l1,2.3c-2.61,1.16-3.92,1.71-6.57,2.75l1.19,3C209.53,125,211.1,124.34,214.21,122.94Z" transform="translate(-6.54)"/></g><g id="finalscore"><text class="cls-2" transform="translate(100 105)">
EOD;
    $html .= $htmlInfo["finalscore"];
    $html .= <<<EOD
    </text></g></svg>
    </div>
    <div class="item box-long box-title center grid-right grid-top grid-left"><h2>
EOD;
    $html .= $htmlInfo["url"];
    $html .= <<<EOD
    </h2></div>
EOD;
// Circle Diagrams
    $html .= <<<EOD
  <div class="item center box-long grid-top grid-left bg-blue dark circlediagram">
  <svg version="1.1"
	 xmlns="http://www.w3.org/2000/svg"
	 x="0px" y="0px" viewBox="0 0 1630 320" width="1640px" height="320px"
	 overflow="visible">

    <g id="circleBarCharts">

        <!-- Web Circle Bar Chart -->
        <g id="circleBar-seo-mobile-group" transform="translate(0,0)">
            <text id="circleBar-seo-mobile-text" opacity="0" x="50" y="170">SEO MOBILE</text>
            <text id="circleBar-seo-mobile-scoretext" opacity="0" x="88" y="140">
EOD;
    $html .= $htmlInfo["seomobilescore"] . '%';
    $html .= <<<EOD
            </text>
            <g id="circleBar-seo-mobile-chart" transform="translate(100,150)"></g>
            <clippath id="circleBar-seo-mobile-clipPath">
                <rect id="circleBar-seo-mobile-clipLabels" x="205" y="215" width="180" height="0"></rect>
            </clippath>
            <g id="circleBar-seo-mobile-legend" clip-path="url(#circleBar-web-clipPath)">
                <text id="circleBar-seo-mobile-values" transform="translate(107,225)"></text>
                <text id="circleBar-seo-mobile-labels" transform="translate(162,225)"></text>
            </g>
        </g>
        <!-- END: Web Circle Bar Chart -->

        <!-- Mobile Circle Bar Chart -->
        <g id="circleBar-serp-view-group" transform="translate(300,0)">
            <text id="circleBar-serp-view-text" opacity="0" x="50" y="170">SERP VIEW</text>
            <text id="circleBar-serp-view-scoretext" opacity="0" x="88" y="140">
EOD;
    $html .= $htmlInfo["serpViewscore"] . '%';
    $html .= <<<EOD
            </text>
            <g id="circleBar-serp-view-chart" transform="translate(100,150)"></g>
            <clippath id="circleBar-serp-view-clipPath">
                <rect id="circleBar-serp-view-clipLabels" x="205" y="215" width="150" height="0"></rect>
            </clippath>
            <g id="circleBar-serp-view-legend" clip-path="url(#circleBar-mobile-clipPath)">
                <text id="circleBar-serp-view-values" transform="translate(107,225)"></text>
                <text id="circleBar-serp-view-labels" transform="translate(162,225)"></text>
            </g>
        </g>
        <!-- END: Serp View Circle Bar Chart -->
       <!-- Content Bar Chart -->
        <g id="circleBar-content-group" transform="translate(670,0)">
            <text id="circleBar-content-text" opacity="0" x="50" y="170">CONTENT</text>
            <text id="circleBar-content-scoretext" opacity="0" x="88" y="140">
EOD;
    $html .= $htmlInfo["contentScore"] . '%';
    $html .= <<<EOD
            </text>
            <g id="circleBar-content-chart" transform="translate(100,150)"></g>
            <clippath id="circleBar-content-clipPath">
                <rect id="circleBar-content-clipLabels" x="205" y="215" width="150" height="0"></rect>
            </clippath>
            <g id="circleBar-content-legend" clip-path="url(#circleBar-mobile-clipPath)">
                <text id="circleBar-content-values" transform="translate(107,225)"></text>
                <text id="circleBar-content-labels" transform="translate(162,225)"></text>
            </g>
        </g>
        <!-- END: Mobile Circle Bar Chart -->
      <!-- Page Speed Bar Chart -->
        <g id="circleBar-page-speed-group" transform="translate(1040,0)">
            <text id="circleBar-page-speed-text" opacity="0" x="50" y="170">PAGE SPEED</text>
            <text id="circleBar-page-speed-scoretext" opacity="0" x="88" y="140">
EOD;
    $html .= $htmlInfo["speedScore"] . '%';
    $html .= <<<EOD
            </text>
            <g id="circleBar-page-speed-chart" transform="translate(100,150)"></g>
            <clippath id="circleBar-page-speed-clipPath">
                <rect id="circleBar-page-speed-clipLabels" x="205" y="215" width="150" height="0"></rect>
            </clippath>
            <g id="circleBar-page-speed-legend" clip-path="url(#circleBar-mobile-clipPath)">
                <text id="circleBar-page-speed-values" transform="translate(107,225)"></text>
                <text id="circleBar-page-speed-labels" transform="translate(162,225)"></text>
            </g>
        </g>
        <!-- END: Page Speed Circle Bar Chart -->
      <!-- Social Links Bar Chart -->
        <g id="circleBar-social-links-group" transform="translate(1350,0)">
            <text id="circleBar-social-links-text" opacity="0" x="47" y="170">SOCIAL LINKS</text>
            <text id="circleBar-social-links-scoretext" opacity="0" x="88" y="140">
EOD;
    $html .= $htmlInfo["socialScore"] . '%';
    $html .= <<<EOD
            </text>
            <g id="circleBar-social-links-chart" transform="translate(100,150)"></g>
            <clippath id="circleBar-social-links-clipPath">
                <rect id="circleBar-social-links-clipLabels" x="205" y="215" width="150" height="0"></rect>
            </clippath>
            <g id="circleBar-social-links-legend" clip-path="url(#circleBar-mobile-clipPath)">
                <text id="circleBar-social-links-values" transform="translate(107,225)"></text>
                <text id="circleBar-social-links-labels" transform="translate(162,225)"></text>
            </g>
        </g>
        <!-- END: Social Links Circle Bar Chart -->
    </g>

</svg>
</div>
EOD;

    //********************** group1: seo mobile **********************
    $html .= <<<EOD
    <!--SEO MOBILE-->
  <div class="item box-short grid-top"><h2>SEO MOBILE</h2></div>
 <!--SEO MOBILE INFO BOX-->
  <div class="item box-info3 grid-right grid-top">
    <input id="tab1" type="radio" name="tab1" checked><label for="tab1">Mobile SEO</label>
            <input id="tab2" type="radio" name="tab1"><label for="tab2">Mobile Index First</label>
            <input id="tab3" type="radio" name="tab1"><label for="tab3">Our Tips</label>
            <section id="content1"><img src="assets/img/screenshot.png" max-height="50%"><p>In short: the number of mobile searches is EXPLODING. In fact, 58% of all searches in Google are now done from a mobile device. Google is overhauling their entire algorithm so that it’s optimized for mobile users FIRST. Needless to say, “SEO” is now about optimizing for “Mobile SEO”.</p></section>
            <section id="content2"><img src="assets/img/screenshot.png" max-height="50%"><p>Google’s Mobile-first Index ranks the search results based only on the mobile-version of the page. And yes, this occurs even if you’re searching from a desktop. Before this update, Google’s index would use a mix of desktop and mobile results. So if someone searched from an iPhone, Google would show them mobile results. And if someone searched for something on a desktop, they’d get “desktop results”.</p>
            <p>Today, no matter what device you use, Google shows you results from their mobile index.</p></section>
            <section id="content3"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdfdf</p></section>
  </div> <!--ENDSEO MOBILE INFO BOX-->

  <div class="item-question test-question">Is your Site reachable?</div>
  <div class="item-result">
  <h3><i class="far fa-thumbs-up"></i> Your Results</h3>
    <p>Your site https://susinspired.ch/ is alive.</p>
    <br><br>
    <h3><i class="far fa-file-code"></i> Code</h3>
    <p></p>
    <br><br>
    <h3><i class="far fa-arrow-alt-circle-up"></i> Our Suggestions</h3>
    <p></p>
</div>
  <div class="item-question test-question">Does the Googlebot crawl all of your mobile content?</div>
  <div class="item-result">
  <h3><i class="far fa-thumbs-up"></i> Your Results</h3>
    <p>*Screenshot* *Fetch Status*</p>
    <br><br>
    <h3><i class="far fa-file-code"></i> Code</h3>
    <p></p>
    <br><br>
    <h3><i class="far fa-arrow-alt-circle-up"></i> Our Suggestions</h3>
    <p></p>
  </div>
  <div class="item-question test-question">Do you have a "mobile friendly" meta tag?</div>
 <div class="item-result">
 <h3><i class="far fa-thumbs-up"></i> Your Results</h3>
EOD;
 if ($htmlInfo["viewportexists"] = false) {
     $html .= '<p>You don\'t have mobile friendly meta tag. </p>';
 }else{
    $html .= '<p>You have the mobile friendly meta tag.</p>';
 }

 $html .= <<<EOD
    <br><br>
    <h3><i class="far fa-file-code"></i> Code</h3>
    <p>&lthead&gt</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&ltmeta name=&#34;viewport&#34; content=&#34;width=device-width, initial-scale=1&#34;&gt</p>
    <p>&lt/head&gt</p>
    <br><br>
    <h3><i class="far fa-arrow-alt-circle-up"></i> Our Suggestions</h3>
    <p>In this mobile world, you should be specifying the viewport. If you don’t, you run the risk of having a poor mobile experience</p>
    </div>

EOD;
    //********************** group2: infos on serp (search engine ranking page)**********************
    $html .= <<<EOD
    <!--SERP VIEW-->

   <!--SERP VIEW INFO BOX-->
    <div class="item box-info3 grid-top grid-left">
      <input id="tab4" type="radio" name="tab2" checked><label for="tab4">Title Tag</label>
              <input id="tab5" type="radio" name="tab2"><label for="tab5">Meta Description</label>
              <input id="tab6" type="radio" name="tab2"><label for="tab6">Schema.org Structured Data</label>
              <section id="content4"><img src="assets/img/screenshot.png" max-height="50%"><p>In short: the number of mobile searches is EXPLODING. In fact, 58% of all searches in Google are now done from a mobile device. Google is overhauling their entire algorithm so that it’s optimized for mobile users FIRST. Needless to say, “SEO” Now About Optimizing for “Mobile SEO”.</p></section>
              <section id="content5"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdf</p></section>
              <section id="content6"><img src="assets/img/screenshot.png" max-height="50%"><p>Schema.org is the result of collaboration between Google, Bing, Yandex, and Yahoo! to help you provide the information their search engines need to understand your content and provide the best search results possible at this time. Adding Schema markup to your HTML improves the way your page displays in SERPs by enhancing the rich snippets that are displayed beneath the page title.</p></section>
    </div> <!--END SERP VIEW INFO BOX-->

    <div class="item box-short textright grid-top"><h2>SERP VIEW</h2></div>
    <div class="item-question test-question">Does your title Tag have the correct length?</div>
    <div class="item-result">
    <h3><i class="far fa-thumbs-up"></i> Your Results</h3>
EOD;
if (isset($htmlInfo["titleText"])) {
    $html .= '<p>' . $htmlInfo["titleText"] . '</p>';
    $html .= '<p>Your title tag has ' . $htmlInfo["titleLength"] . 'characters.</p>';
}
$html .= <<<EOD
    <br><br>
    <h3><i class="far fa-file-code"></i> Code Example</h3>
    <p>&lthead&gt</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&lttitle&gtPrimary Keyword - Secondary Keyword | Brand Name&lt/title&gt</p>
    <p>&lt/head&gt</p>
    <br><br>
    <h3><i class="far fa-arrow-alt-circle-up"></i> Our Suggestions</h3>
    <p>Google typically displays the first 50–60 characters of a title tag. If you keep your titles under 60 characters, our research suggests that you can expect about 90% of your titles to display properly. There's no exact character limit, because characters can vary in width and Google's display titles max out (currently) at 600 pixels.</p>
    </div>
    <div class="item-question test-question">Does your meta description have the correct length?</div>
    <div class="item-result">
    
    <h3><i class="far fa-thumbs-up"></i> Your Results</h3>
EOD;
if (isset($htmlInfo["description"])) {
    $html .= '<p>'. $htmlInfo["description"] . '</p>';
    $html .= '<p>The meta description of your page has a length of ' . $htmlInfo["descriptionlength"]. ' characters </p>';
} else {
    $html .= '<p>Your page doesn\'t have meta description. </p>';
}

$html .= <<<EOD
    <br><br>
    <h3><i class="far fa-file-code"></i> Code Example</h3>
    <p>&lthead&gt</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&ltmeta name=&#34;description&#34; content=&#34;Meta description tags, while not tied to search engine rankings, are extremely important in gaining user click-through from SERPs.&#34;&gt</p>
    <p>&lt/head&gt</p>
    <br><br>
    <h3><i class="far fa-arrow-alt-circle-up"></i> Our Suggestions</h3>
    <p>Meta descriptions are HTML attributes that provide concise summaries of webpages. They are between one sentence to a short paragraph and appear underneath the blue clickable links in a search engine results page (SERP). However, depending on a user's query, Google might pull meta description text from other areas on your page (in an attempt to better answer the searcher's query).</p>
    </div>
    <div class="item-question test-question">Do you take advantage of rich snippets?</div>
   <div class="item-result">
   <h3><i class="far fa-thumbs-up"></i> Your Results</h3>
EOD;
if (isset($htmlInfo["richsnippet"])&& sizeof($htmlInfo["richsnippet"]) > 0) {
    $richsnippets = $htmlInfo["richsnippet"];
    foreach ($richsnippets as $richsnippet) {
        echo $richsnippet->getAttribute("itemtype");
    }
} else {
    $html .= '<p>Your page doesn\'t have any rich snippets. </p>';
}
   $html .= <<<EOD
       <br><br>
       <h3><i class="far fa-file-code"></i> Code Example</h3>
       <p>&ltdiv itemscope itemtype=&#34;https://schema.org/Book&#34;&gt</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;&ltspan itemprop=&#34;name&#34;&gt Inbound Marketing: Insights of Hologram Seo&lt/span&gt</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;&ltspan itemprop=&#34;author&#34;&gtJohn Doe&lt/span&gt</p>
       <p>&lt/div&gt</p>
       <br><br>
       <h3><i class="far fa-arrow-alt-circle-up"></i> Our Suggestions</h3>
       <p>There are some indications that search results with more extensive rich snippets (like those created using Schema) will have a better click-through rate. </p>
       </div>
  <!--END SERP VIEW-->
EOD;

//********************** group3: content**********************
    $html .= <<<EOD
<!--CONTENT-->
<div class="item box-short group-title grid-top"><h2>CONTENT</h2></div>
 <!--CONTENT INFO BOX-->
  <div class="item box-info6 grid-top grid-right">
    <input id="tab7" type="radio" name="tab3" checked><label for="tab7">Mobile SEO</label>
            <input id="tab8" type="radio" name="tab3"><label for="tab8">Mobile Index First</label>
            <input id="tab9" type="radio" name="tab3"><label for="tab9">Our Tips</label>
            <section id="content7"><img src="assets/img/screenshot.png" max-height="50%"><p>In short: the number of mobile searches is EXPLODING. In fact, 58% of all searches in Google are now done from a mobile device. Google is overhauling their entire algorithm so that it’s optimized for mobile users FIRST. Needless to say, “SEO” Now About Optimizing for “Mobile SEO”.</p></section>
            <section id="content8"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdf</p></section>
            <section id="content9"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdgffdfdfdf</p></section>
  </div><!--END CONTENT INFO BOX-->
  <div class="item-question test-question">Is your Site secure with https?</div>
  <div class="item-result">
    <i class="fas fa-thermometer-full"></i>
    <p>Your site https://susinspired.ch/ is alive.</p>
    <i class="far fa-file-code"></i><p></p></div>
  <div class="item-question test-question">Does it have mixed content?</div>
  <div class="item-result">*Screenshot* *Fetch Status*</div>
  <div class="item-question test-question">Does it have one H1 Tag only?</div>
 <div class="item-result">
    <i class="fas fa-thermometer-full"></i>
    <p>Your site is using the meta viewport which allows the page to reflow content to match different screen sizes whether rendered on a small mobile phone or a large desktop monitor.</p>
    <i class="far fa-file-code"></i><p></p></div>
 <div class="item-question test-question">Does your site have a xml sitemap?</div>
 <div class="item-result">
    <i class="fas fa-thermometer-full"></i>
    <p>Your site is using the meta viewport which allows the page to reflow content to match different screen sizes whether rendered on a small mobile phone or a large desktop monitor.</p>
    <i class="far fa-file-code"></i><p></p></div>
  <div class="item-question test-question">Do you use the correct transfer link for multiple languages?</div>
 <div class="item-result">
    <i class="fas fa-thermometer-full"></i>
    <p>Your site is using the meta viewport which allows the page to reflow content to match different screen sizes whether rendered on a small mobile phone or a large desktop monitor.</p>
    <i class="far fa-file-code"></i><p></p></div>
 <div class="item-question test-question">Does every picture have an alt tag?</div>
 <div class="item-result">
    <i class="fas fa-thermometer-full"></i>
    <p>Your site is using the meta viewport which allows the page to reflow content to match different screen sizes whether rendered on a small mobile phone or a large desktop monitor.</p>
    <i class="far fa-file-code"></i><p></p></div>
<!--END CONTENT-->
EOD;

//********************** group4: page speed**********************
    $html .= <<<EOD
<!--SPEED-->
 <!--SPEED INFO BOX-->
  <div class="item box-info3 grid-left grid-top">
    <input id="tab10" type="radio" name="tab4" checked><label for="tab10">Mobile SEO</label>
            <input id="tab11" type="radio" name="tab4"><label for="tab11">Mobile Index First</label>
            <input id="tab12" type="radio" name="tab4"><label for="tab12">Our Tips</label>
            <section id="content10"><img src="assets/img/screenshot.png" max-height="50%"><p>In short: the number of mobile searches is EXPLODING. In fact, 58% of all searches in Google are now done from a mobile device. Google is overhauling their entire algorithm so that it’s optimized for mobile users FIRST. Needless to say, “SEO” Now About Optimizing for “Mobile SEO”.</p></section>
            <section id="content11"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdf</p></section>
            <section id="content12"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdfdf</p></section>
  </div> <!--END SPEED INFO BOX-->
  <div class="item box-short group-title textright grid-top"><h2>PAGE SPEED</h2></div>
  <div class="item-question test-question">Does your page load longer than one second?</div>
  <div class="item-result">
    <i class="fas fa-thermometer-full"></i>
    <p>Your site https://susinspired.ch/ is alive.</p>
    <i class="far fa-file-code"></i><p></p></div>
  <div class="item-question test-question">Are all your css files minified?</div>
  <div class="item-result">*Screenshot* *Fetch Status*</div>
  <div class="item-question test-question">Are all your js files minified?</div>
 <div class="item-result">
    <i class="fas fa-thermometer-full"></i>
    <p>Your site is using the meta viewport which allows the page to reflow content to match different screen sizes whether rendered on a small mobile phone or a large desktop monitor.</p>
    <i class="far fa-file-code"></i><p></p></div>
<!--END SPEED-->
EOD;

//********************** group5: social links**********************
    $html .= <<<EOD
<!--SOCIAL LINKS-->
  <div class="item box-short group-title grid-top"><h2>SOCIAL LINKS</h2></div>
 <!--SOCIAL LINKS INFO BOX-->
  <div class="item box-info3 grid-top grid-right grid-bottom">
    <input id="tab13" type="radio" name="tab5" checked><label for="tab13">Mobile SEO</label>
            <input id="tab14" type="radio" name="tab5"><label for="tab14">Mobile Index First</label>
            <input id="tab15" type="radio" name="tab5"><label for="tab15">Our Tips</label>
            <section id="content13"><img src="assets/img/screenshot.png" max-height="50%"><p>In short: the number of mobile searches is EXPLODING. In fact, 58% of all searches in Google are now done from a mobile device. Google is overhauling their entire algorithm so that it’s optimized for mobile users FIRST. Needless to say, “SEO” Now About Optimizing for “Mobile SEO”.</p></section>
            <section id="content14"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdf</p></section>
            <section id="content15"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdfdf</p></section>
  </div> <!--END SPEED INFO BOX-->
    <div class="item-question test-question">Does your site use social open graph links?</div>
  <div class="item-result">
    <i class="fas fa-thermometer-full"></i>
    <p>Your site https://susinspired.ch/ is alive.</p>
    <i class="far fa-file-code"></i><p></p></div>
<!--END SPEED-->
</div><!--END CONTAINER-->
EOD;

    //********************** button für pdf export **********************

    return $html;

}
