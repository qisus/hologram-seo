

var chartData = {
    "barCircleSeoMobile":[
          {"index":0.3, "value":results.isAliveScore, "fill":"#2B7A78", "label":"Site Reachability"},
          {"index":0.4, "value":45, "fill":"#2B7A78", "label":"Crawlable for Google"},
          {"index":0.5, "value":results.urlfriendlyScore, "fill":"#2B7A78", "label":"Mobile Friendly"}
      ],
      "barCircleSERPview":[
          {"index":0.3, "value":results.titleLengthScore, "fill":"#2B7A78", "label":"Title Tag"},
          {"index":0.4, "value":results.metadescriptionScore, "fill":"#2B7A78", "label":"Meta Description"},
          {"index":0.5, "value":results.richSnippetScore, "fill":"#2B7A78", "label":"Rich Snippets"}
      ],
    "barCircleContent":[
          {"index":0.3, "value":100, "fill":"#2B7A78", "label":"Security HTTPS"},
          {"index":0.4, "value":100, "fill":"#2B7A78", "label":"Mixed Content"},
          {"index":0.5, "value":100, "fill":"#2B7A78", "label":"H1 Tag"},
          {"index":0.6, "value":100,  "fill":"#2B7A78", "label":"XML Sitemap"},
          {"index":0.7, "value":23,  "fill":"#2B7A78", "label":"Multiple Languages"},
          {"index":0.8, "value":76,  "fill":"#2B7A78", "label":"Image Alt Tag"}
      ],
    "barCirclePageSpeed":[
          {"index":0.3, "value":100, "fill":"#2B7A78", "label":"Loading Time"},
          {"index":0.4, "value":100, "fill":"#2B7A78", "label":"CSS Files Minified"},
          {"index":0.5, "value":100, "fill":"#2B7A78", "label":"JS Files Minified"}
      ]
    ,
    "barCircleSocialLinks":[
          {"index":0.3, "value":100, "fill":"#2B7A78", "label":"Open Graph Links"}
      ]
  };
  
  function drawBarCircleChart(data,target,values,labels){
      var w = 362,
          h = 362,
          size = 100 * 1.25,
          radius = 200,
          sectorWidth = .1,
          radScale = 25,
          sectorScale = 1.45,
          target = d3.select(target),
          valueText = d3.select(values), // + '%' String hinzufügen funktioniert nicht
          labelText = d3.select(labels);
  
  
      var arc = d3.svg.arc()
          .innerRadius(function(d,i){return (d.index/sectorScale) * radius + radScale; })
          .outerRadius(function(d,i){return ((d.index/sectorScale) + (sectorWidth/sectorScale)) * radius + radScale; })
          .startAngle(Math.PI)
          .endAngle(function(d) { return Math.PI + (d.value / size) * 2 * Math.PI; });
      
      var path = target.selectAll("path")
          .data(data);
  
      //TODO: seperate color and index from data object, make it a pain to update object order
      path.enter().append("svg:path")
          .attr("fill",function(d,i){return d.fill})
          .attr("stroke","#D1D3D4")
          .transition()
          .ease("elastic")
          .duration(1000)
          .delay(function(d,i){return i*100})
          .attrTween("d", arcTween);
          
      valueText.selectAll("tspan").data(data).enter()
          .append("tspan")
          .attr({
              x:30,
              y:function(d,i){return i*15},       
              "text-anchor":"end"
          })
          .text(function(d,i){return data[i].value});
      
      labelText.selectAll("tspan").data(data).enter()
          .append("tspan")
          .attr({
              x:-16,
              y:function(d,i){return i*15}
          })
          .text(function(d,i){return data[i].label});
  
      function arcTween(b) {
          var i = d3.interpolate({value: 0}, b);
          return function(t) {
              return arc(i(t));
          };
      }
  }
  
  // Animation Queue
  setTimeout(function(){drawBarCircleChart(chartData.barCircleSeoMobile,"#circleBar-seo-mobile-chart","#circleBar-seo-mobile-values","#circleBar-seo-mobile-labels")},500);
  
  setTimeout(function(){drawBarCircleChart(chartData.barCircleSERPview,"#circleBar-serp-view-chart","#circleBar-serp-view-values","#circleBar-serp-view-labels")},800);
  
  setTimeout(function(){drawBarCircleChart(chartData.barCircleContent,"#circleBar-content-chart","#circleBar-content-values","#circleBar-content-labels")},800);
  
  setTimeout(function(){drawBarCircleChart(chartData.barCirclePageSpeed,"#circleBar-page-speed-chart","#circleBar-page-speed-values","#circleBar-page-speed-labels")},800);
  
  setTimeout(function(){drawBarCircleChart(chartData.barCircleSocialLinks,"#circleBar-social-links-chart","#circleBar-social-links-values","#circleBar-social-links-labels")},800);
  
  d3.select("#circleBar-seo-mobile-text")
      .transition()
      .delay(750)
      .duration(500)
      .attr("opacity","1")
      .attr("fill","#feffff");
    d3.select("#circleBar-seo-mobile-scoretext")
      .transition()
      .delay(750)
      .duration(500)
      .attr("opacity","1")
      .attr("fill","#feffff");
  
  d3.select("#circleBar-seo-mobile-Labels")
      .transition()
      .delay(600)
      .duration(1250)
      .attr("height","150")
      .attr("fill","#feffff");
  
  d3.select("#circleBar-serp-view-text")
      .transition()
      .delay(1050)
      .duration(500)
      .attr("opacity","1")
      .attr("fill","#feffff");

      d3.select("#circleBar-serp-view-scoretext")
      .transition()
      .delay(1050)
      .duration(500)
      .attr("opacity","1")
      .attr("fill","#feffff");

  d3.select("#circleBar-serp-view-Labels")
      .transition()
      .delay(900)
      .duration(1250)
      .attr("height","150")
      .attr("fill","#feffff");
  
  d3.select("#circleBar-content-text")
      .transition()
      .delay(1050)
      .duration(500)
      .attr("opacity","1")
      .attr("fill","#feffff");
      d3.select("#circleBar-content-scoretext")
      .transition()
      .delay(1050)
      .duration(500)
      .attr("opacity","1")
      .attr("fill","#feffff");

  d3.select("#circleBar-content-Labels")
      .transition()
      .delay(900)
      .duration(1250)
      .attr("height","150")
      .attr("fill","#feffff");
  
  d3.select("#circleBar-page-speed-text")
      .transition()
      .delay(1050)
      .duration(500)
      .attr("opacity","1")
      .attr("fill","#feffff");

      d3.select("#circleBar-page-speed-scoretext")
      .transition()
      .delay(1050)
      .duration(500)
      .attr("opacity","1")
      .attr("fill","#feffff");

  d3.select("#circleBar-page-speed-Labels")
      .transition()
      .delay(900)
      .duration(1250)
      .attr("height","150")
      .attr("fill","#feffff");
  
  d3.select("#circleBar-social-links-text")
      .transition()
      .delay(1050)
      .duration(500)
      .attr("opacity","1")
      .attr("fill","#feffff");

      d3.select("#circleBar-social-links-scoretext")
      .transition()
      .delay(1050)
      .duration(500)
      .attr("opacity","1")
      .attr("fill","#feffff");

  d3.select("#circleBar-social-links-Labels")
      .transition()
      .delay(900)
      .duration(1250)
      .attr("height","150")
      .attr("fill","#feffff");