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
    <div class="container">
    <div class="item box-long center"><h1>Seo Report</h1></div>
EOD;

    //final score + URL + GroupScore Chart
    $html .= <<<EOD
    <div class="item box-long center">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 432.63 466.73"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:3px;}.cls-2{font-size:38.9px;}.cls-2,.cls-5{font-family:Montserrat-Bold, Montserrat;font-weight:700;}.cls-3{letter-spacing:-0.01em;}.cls-4{letter-spacing:0em;}.cls-5{font-size:68.89px;}</style></defs><title>finalscore</title><g id="finalscore_graphic"><path d="M223.69,116.89a183,183,0,0,1,130,53.93,183.44,183.44,0,0,1-260,0,183,183,0,0,1,130-53.93m0-3A186,186,0,0,0,89.49,170.82a186.62,186.62,0,0,0,268.39,0,186,186,0,0,0-134.2-56.93Z"/><path d="M224.62,79.62a91.2,91.2,0,1,1-91.2,91.2,91.3,91.3,0,0,1,91.2-91.2m0-4a95.2,95.2,0,1,0,95.2,95.2,95.2,95.2,0,0,0-95.2-95.2Z"/><line class="cls-1" x1="147.16" y1="222.15" x2="225.47" y2="333.5"/><line class="cls-1" x1="301.88" y1="221.7" x2="224.44" y2="332.03"/><text class="cls-2" transform="translate(86.36 373.25)">FINAL S<tspan class="cls-3" x="158.16" y="0">C</tspan><tspan class="cls-4" x="186.09" y="0">ORE</tspan></text><rect x="89.49" y="331.42" width="268.39" height="4.15"/></g><g id="finalscore_number"><text class="cls-5" transform="translate(180.07 194.74)">
EOD;
$html .=<<<EOD
    </text></g></svg>
    </div>
  <div class="item box-long center grid-left grid-top"><p>Circle Diagrams</p>
   <svg version="1.1"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
	 x="0px" y="0px" width="724px" height="400px"
	 overflow="visible" xml:space="preserve">

    <g id="circleBarCharts">

        <!-- Web Circle Bar Chart -->
        <g id="circleBar-web-group" transform="translate(0,0)">
          <image id="circleBar-web-icon" opacity="0" x="166" y="112" overflow="visible" width="98" height="77" xlink:href="http://www.frank-designs.com/images/icon_web.png" />
            <text id="circleBar-web-text" opacity="0" x="200" y="143">WEB</text>
            <g id="circleBar-web-chart" transform="translate(215,150)"></g>
            <clippath id="circleBar-web-clipPath">
                <rect id="circleBar-web-clipLabels" x="205" y="215" width="180" height="0"></rect>
            </clippath>
            <g id="circleBar-web-legend" clip-path="url(#circleBar-web-clipPath)">
                <text id="circleBar-web-values" transform="translate(222,225)"></text>
                <text id="circleBar-web-labels" transform="translate(277,225)"></text>
            </g>
        </g>
        <!-- END: Web Circle Bar Chart -->

        <!-- Mobile Circle Bar Chart -->
        <g id="circleBar-mobile-group" transform="translate(362,0)">
            <image id="circleBar-mobile-icon" opacity="0" x="195" y="112" overflow="visible" width="40" height="77" xlink:href="http://www.frank-designs.com/images/icon_mobile.png" />
            <text id="circleBar-mobile-text" opacity="0" x="187" y="155">MOBILE</text>
            <g id="circleBar-mobile-chart" transform="translate(215,150)"></g>
            <clippath id="circleBar-mobile-clipPath">
                <rect id="circleBar-mobile-clipLabels" x="205" y="215" width="150" height="0"></rect>
            </clippath>
            <g id="circleBar-mobile-legend" clip-path="url(#circleBar-mobile-clipPath)">
                <text id="circleBar-mobile-values" transform="translate(222,225)"></text>
                <text id="circleBar-mobile-labels" transform="translate(277,225)"></text>
            </g>
        </g>
        <!-- END: Mobile Circle Bar Chart -->
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
            <section id="content1"><img src="assets/img/screenshot.png" max-height="50%"><p>In short: the number of mobile searches is EXPLODING. In fact, 58% of all searches in Google are now done from a mobile device. Google is overhauling their entire algorithm so that it’s optimized for mobile users FIRST. Needless to say, “SEO” Now About Optimizing for “Mobile SEO”.</p></section>
            <section id="content2"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdf</p></section>
            <section id="content3"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdfdf</p></section>
  </div> <!--ENDSEO MOBILE INFO BOX-->
  <div class="item-question test-question">Is your Site reachable?</div>
  <div class="item-result">
    <i class="fas fa-thermometer-full"></i>
    <p>Your site https://susinspired.ch/ is alive.</p>
    <i class="far fa-file-code"></i><p></p></div>
  <div class="item-question test-question">Does the Googlebot crawl all of your mobile content?</div>
  <div class="item-result">*Screenshot* *Fetch Status*</div>
  <div class="item-question test-question">Do you have a "mobile friendly" meta tag?</div>
 <div class="item-result">
    <i class="fas fa-thermometer-full"></i>
    <p>Your site is using the meta viewport which allows the page to reflow content to match different screen sizes whether rendered on a small mobile phone or a large desktop monitor.</p>
    <i class="far fa-file-code"></i><p></p></div>
EOD;


    //********************** group2: infos on serp (search engine ranking page)**********************
    $html .= <<<EOD
    <!--SERP VIEW-->
    <div class="item box-short grid-top grid-left"><h2>SERP VIEW</h2></div>
    
   <!--SERP VIEW INFO BOX--> 
    <div class="item box-info3 grid-top">
      <input id="tab4" type="radio" name="tab2" checked><label for="tab4">Serp view 1</label>
              <input id="tab5" type="radio" name="tab2"><label for="tab5">Serp view 2</label>
              <input id="tab6" type="radio" name="tab2"><label for="tab6">Serp view 3</label>
              <section id="content4"><img src="assets/img/screenshot.png" max-height="50%"><p>In short: the number of mobile searches is EXPLODING. In fact, 58% of all searches in Google are now done from a mobile device. Google is overhauling their entire algorithm so that it’s optimized for mobile users FIRST. Needless to say, “SEO” Now About Optimizing for “Mobile SEO”.</p></section>
              <section id="content5"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdf</p></section>
              <section id="content6"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdfdf</p></section>
    </div> <!--END SERP VIEW INFO BOX--> 
    <div class="item-question test-question grid-left">Does your title Tag have the correct length?</div>
    <div class="item-result">
      <i class="fas fa-thermometer-full"></i>
      <p>Your site https://susinspired.ch/ is alive.</p>
      <i class="far fa-file-code"></i><p></p></div>
    <div class="item-question test-question grid-left">Does your meta description have the correct length?</div>
    <div class="item-result">*Screenshot* *Fetch Status*</div>
    <div class="item-question test-question grid-left">Do you take advantage of rich snippets?</div>
   <div class="item-result">
      <i class="fas fa-thermometer-full"></i>
      <p>Your site is using the meta viewport which allows the page to reflow content to match different screen sizes whether rendered on a small mobile phone or a large desktop monitor.</p>
      <i class="far fa-file-code"></i><p></p></div>
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
  <div class="item box-short group-title grid-top grid-left"><h2>PAGE SPEED</h2></div>
 <!--SPEED INFO BOX--> 
  <div class="item box-info3 grid-top">
    <input id="tab10" type="radio" name="tab4" checked><label for="tab10">Mobile SEO</label>
            <input id="tab11" type="radio" name="tab4"><label for="tab11">Mobile Index First</label>
            <input id="tab12" type="radio" name="tab4"><label for="tab12">Our Tips</label>
            <section id="content10"><img src="assets/img/screenshot.png" max-height="50%"><p>In short: the number of mobile searches is EXPLODING. In fact, 58% of all searches in Google are now done from a mobile device. Google is overhauling their entire algorithm so that it’s optimized for mobile users FIRST. Needless to say, “SEO” Now About Optimizing for “Mobile SEO”.</p></section>
            <section id="content11"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdf</p></section>
            <section id="content12"><img src="assets/img/screenshot.png" max-height="50%"><p>dfdfdfdfdf</p></section>
  </div> <!--END SPEED INFO BOX--> 
  <div class="item-question test-question grid-left">Does your page load longer than one second?</div>
  <div class="item-result">
    <i class="fas fa-thermometer-full"></i>
    <p>Your site https://susinspired.ch/ is alive.</p>
    <i class="far fa-file-code"></i><p></p></div>
  <div class="item-question test-question grid-left">Are all your css files minified?</div>
  <div class="item-result">*Screenshot* *Fetch Status*</div>
  <div class="item-question test-question grid-left">Are all your js files minified?</div>
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
    $html .= '<tr>';
    $html .= '<div><form action="/functions/16export2pdf.php" method="post"><button type="submit">EXPORT PDF</button></div>';
    $html .= '</tr>';
    $html .= '</tbody>';

    $html .= '</table>';
    $html .= '</div>';

    return $html;

}
