/*

Template:  Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template
Author: potenzaglobalsolutions.com
Design and Developed by: potenzaglobalsolutions.com

NOTE: 

*/

(function($){
"use strict";

$(document).ready(function() {
 /*************************
     Line chart
*************************/ 
if ($('#morris-line').exists()) {
    Morris.Line({
      element: 'morris-line',
      data: [
        { y: '2011', a: 50, b: 40 },
        { y: '2012', a: 75,  b: 65 },
        { y: '2013', a: 50,  b: 40 },
        { y: '2014', a: 75,  b: 65 },
        { y: '2015', a: 50,  b: 40 },
        { y: '2016', a: 75,  b: 65 },
        { y: '2017', a: 60,  b: 50 }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B'],
      fillOpacity: ['0.1'],
      pointFillColors:['#ffffff'],
      pointStrokeColors:['#999999'],
      behaveLikeLine: true,
      gridLineColor: '#efefef',
      hideHover: 'auto',
      lineWidth: '3px',
      pointSize: 0,
      preUnits: '$',
      resize: true,
      lineColors:['#dc3545 ', '#17a2b8']
    });
}
  /*************************
     Bar chart
*************************/    
if ($('#morris-bar').exists()) {
    Morris.Bar({
        element: 'morris-bar',
        data: [
            { y: '2012', a: 142,  b: 155 , c: 165 },
            { y: '2013', a: 160,  b: 150 , c: 135 },
            { y: '2014', a: 185,  b: 195 , c: 166 },
            { y: '2015', a: 190, b: 205 , c: 185 },
            { y: '2016', a: 210, b: 180 , c: 175 },
            { y: '2017', a: 190, b: 180 , c: 195 },
            { y: '2018', a: 180, b: 190 , c: 200 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        labels: ['WordPress', 'HTML5', 'eCommerce'],
        hideHover: 'auto',
        resize: true,
        gridLineColor: '#efefef',
        barSizeRatio: 0.4,
        xLabelAngle: 35,
        barColors: ['#ffc107','#28a745', '#17a2b8']
    });
}

  /*************************
     Area chart
*************************/   
if ($('#morris-area').exists()) {
    Morris.Area({
            element: 'morris-area',
            pointSize: 0,
            lineWidth: 0,
            data: [
                { y: '2011', a: 50, b: 60 },
                { y: '2012', a: 75,  b: 55 },
                { y: '2013', a: 40,  b: 60 },
                { y: '2014', a: 65,  b: 75 },
                { y: '2015', a: 60,  b: 50 },
                { y: '2016', a: 75,  b: 85 },
                { y: '2017', a: 40, b: 50 },
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B'],
            hideHover: 'auto',
            resize: true,
            gridLineColor: '#efefef',
            lineColors: ['#17a2b8', "#e6e6e6"]
        });
}
/*************************
     Bar chart stacked
*************************/  
if ($('#morris-bar-stacked').exists()) {
    Morris.Bar({
            element: 'morris-bar-stacked',
            data: [
                { y: '2011', a: 90,  b: 70, c: 65 },
                { y: '2012', a: 85,  b: 65, c: 46 },
                { y: '2013', a: 60,  b: 50, c: 47 },
                { y: '2014', a: 85,  b: 75, c: 90 },
                { y: '2015', a: 90, b: 110, c: 123 },
                { y: '2016', a: 100, b: 85, c: 75 },
                { y: '2017', a: 85, b: 120, c: 110 },
                { y: '2018', a: 65,  b: 85, c: 70 },
            ],
            xkey: 'y',
            ykeys: ['a', 'b', 'c'],
            stacked: true,
            labels: ['Amazon', 'Ebay','Wallmart'],
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#efefef',
            barColors: ['#84ba3f','#17a2b8', '#e6e6e6']
        });
    }
/*************************
    Area chart with point
*************************/  
if ($('#morris-area-dotted').exists()) {
    Morris.Area({
            element: 'morris-area-dotted',
            pointSize: 3,
            lineWidth: 1,
            data: [
                { y: '2011', a: 30, b: 40 },
                { y: '2012', a: 55,  b: 60 },
                { y: '2013', a: 60,  b: 50 },
                { y: '2014', a: 70,  b: 65 },
                { y: '2015', a: 50,  b: 60 },
                { y: '2016', a: 55,  b: 75 },
                { y: '2017', a: 80, b: 70 }
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B'],
            hideHover: 'auto',
            pointFillColors: ['#ffffff'],
            pointStrokeColors: ['#999999'],
            resize: true,
            smooth: false,
            gridLineColor: '#efefef',
            lineColors: ['#17a2b8', "#e6e6e6"]
        });
}
/*************************
    Donut chart
*************************/  
if ($('#morris-donut').exists()) {
        Morris.Donut({
                element: 'morris-donut',
                data: [
                    {label: "FINANCIAL", value: 65},
                    {label: "MARKETS", value: 150},
                    {label: "ELECTRICITY", value: 120}
                ],
                resize: true,
                colors: ['#84ba3f', '#17a2b8', "#ffc107"]
            });
}
});
})(jQuery);