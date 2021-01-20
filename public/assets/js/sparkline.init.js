/*

Template:  Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template
Author: potenzaglobalsolutions.com
Design and Developed by: potenzaglobalsolutions.com

NOTE: 

*/

 (function($){
  "use strict";

    $(document).ready(function() {        
        function Sparkline() {
            $('#sparkline1').sparkline([20, 30, 25, 40, 40, 50, 56, 37, 50], {
                type: 'line',
                width: '100%',
                height: '200',
                lineWidth: 2,
                spotRadius: 0,
                chartRangeMax: 50,
                lineColor: 'rgba(220, 53, 69, 0.5)',
                fillColor: 'rgba(220, 53, 69, 0.3)',
                highlightLineColor: 'rgba(0,0,0,.1)',
                highlightSpotColor: 'rgba(0,0,0,.2)',
            });
            $('#sparkline1').sparkline([10, 35, 30, 60, 50, 45, 30, 24, 30], {
                type: 'line',
                width: '100%',
                height: '200',
                lineWidth: 2,
                spotRadius: 0,
                chartRangeMax: 40,
                lineColor: 'rgba(40, 167, 69, 0.5)',
                fillColor: 'rgba(40, 167, 69, 0.3)',
                composite: true,
                highlightLineColor: 'rgba(0,0,0,.1)',
                highlightSpotColor: 'rgba(0,0,0,.2)',
            });        
            $('#sparkline2').sparkline([5, 8, 6, 7, 3, 5, 6, 8, 2, 8, 5, 10, 11, 10, 1, 6, 5, 7, 8, 10, 8, 12, 7, 9, 5, 6, 10, 7, 8, 5, 6, 8, 5, 9, 3, 7, 1, 6, 4, 8, 4, 9, 10, 13, 7, 8, 6, 4, 11, 5, 6, 4, 7, 10, 4, 7, 4, 9 ], {
                type: 'bar',
                height: '200',
                barWidth: '10',
                barSpacing: '3',
                barColor: '#17a2b8'
            });
             $('#sparkline9').sparkline([5, 8, 6, 7, 3, 5, 6, 8, 2, 8, 5, 10, 11, 10, 1, 6, 5, 7, 8, 10, 8, 12, 7, 9, 5, 6, 10], {
                type: 'bar',
                height: '200',
                barWidth: '10',
                barSpacing: '3',
                barColor: 'rgba(255, 255, 255, 0.3)'
            });            
            $('#sparkline3').sparkline([40, 30, 20, 10], {
                type: 'pie',
                width: '200',
                height: '165',
                sliceColors: ['#84ba3f', '#dc3545', '#6c757d', '#17a2b8']
            });        
            $('#sparkline4').sparkline([20, 30, 25, 40, 40, 50, 56, 37, 50], {
                type: 'line',
                width: '100%',
                height: '200',
                lineWidth: 2,
                spotRadius: 0,
                chartRangeMax: 50,
                lineColor: '#dc3545',
                fillColor: 'transparent',
                highlightLineColor: 'rgba(0,0,0,.1)',
                highlightSpotColor: 'rgba(0,0,0,.2)'
            });        
            $('#sparkline4').sparkline([10, 35, 30, 60, 50, 45, 30, 24, 30], {
                type: 'line',
                width: '100%',
                height: '200',
                lineWidth: 2,
                spotRadius: 0,
                chartRangeMax: 40,
                lineColor: '#28a745',
                fillColor: 'transparent',
                composite: true,
                highlightLineColor: 'rgba(0,0,0,1)',
                highlightSpotColor: 'rgba(0,0,0,1)'
            });
            $('#sparkline7').sparkline([20, 30, 25, 40, 40, 50, 56, 37, 50], {
                type: 'line',
                width: '100%',
                height: '200',
                chartRangeMax: 50,
                lineWidth: 4,
                spotRadius: 5,
                lineColor: 'rgba(233,233,233,0.7)',
                fillColor: 'transparent',
                highlightLineColor: 'rgba(0,0,0,.1)',
                highlightSpotColor: 'rgba(0,0,0,.2)'
            });
            $('#sparkline7-1').sparkline([20, 30, 25, 40, 40, 50, 56, 37, 50], {
                type: 'line',
                width: '100%',
                height: '181',
                chartRangeMax: 50,
                lineWidth: 4,
                spotRadius: 5,
                lineColor: 'rgba(233,233,233,0.7)',
                fillColor: 'transparent',
                highlightLineColor: 'rgba(0,0,0,.1)',
                highlightSpotColor: 'rgba(0,0,0,.2)'
            });
            $('#sparkline6').sparkline([5, 8, 6, 7, 3, 5, 6, 8, 4, 8, 5, 10, 11, 10, 5, 6, 5, 7, 8, 10], {
                type: 'line',
                width: '100%',
                height: '200',
                lineColor: '#17a2b8',
                fillColor: 'rgba(23, 162, 184, 0.5)',
                highlightLineColor: 'rgba(0,0,0,.1)',
                highlightSpotColor: 'rgba(0,0,0,.2)'
            });
            $('#sparkline8').sparkline([5, 8, 6, 7, 3, 5, 6, 8, 2, 8, 5, 10, 11, 10, 1, 6, 5, 7, 8, 10 ], {
                type: 'line',
                width: '100%',
                height: '200',
                lineWidth: 4,
                spotRadius:0,
                lineColor: 'rgba(255,255,255,0.5)',
                fillColor: 'rgba(255,255,255,0.2)',
                highlightLineColor: 'rgba(0,0,0,.1)',
                highlightSpotColor: 'rgba(0,0,0,.2)'
            });
            $('#sparkline8-1').sparkline([5, 8, 6, 7, 3, 5, 6, 8, 2, 8, 5, 10, 11, 10, 1, 6, 5, 7, 8, 10 ], {
                type: 'line',
                width: '100%',
                height: '181',
                lineWidth: 4,
                spotRadius:0,
                lineColor: 'rgba(255,255,255,0.5)',
                fillColor: 'rgba(255,255,255,0.2)',
                highlightLineColor: 'rgba(0,0,0,.1)',
                highlightSpotColor: 'rgba(0,0,0,.2)'
            });
            $('#sparkline6').sparkline([5, 8, 6, 7, 3, 5, 6, 8, 2, 8, 5, 10, 11, 10, 5, 6, 5, 7, 8, 10], {
                type: 'bar',
                height: '200',
                barWidth: '10',
                barSpacing: '5',
                composite: true,
                barColor: '#dc3545'
            });
            $("#sparkline10").sparkline([2, -4, 6, -6, -4, 3, 6, -8, 10, -5, 3, 7, -10, -11, 9, 10], {
                type: 'bar',
                height: '200',
                barWidth: '10',
                barSpacing: '3',
                barColor: 'rgba(255,255,255,0.7)',
                negBarColor: '#dc3545',
                zeroBarColor: '#000000'
                });

             }
             function drawMouseSpeed() {
                var mrefreshinterval = 500; // update display every 500ms
                var lastmousex=-1; 
                var lastmousey=-1;
                var lastmousetime;
                var mousetravel = 0;
                var mpoints = [];
                var mpoints_max = 30;
                $('html').mousemove(function(e) {
                    var mousex = e.pageX;
                    var mousey = e.pageY;
                    if (lastmousex > -1) {
                        mousetravel += Math.max( Math.abs(mousex-lastmousex), Math.abs(mousey-lastmousey) );
                    }
                    lastmousex = mousex;
                    lastmousey = mousey;
                });
                var mdraw = function() {
                    var md = new Date();
                    var timenow = md.getTime();
                    if (lastmousetime && lastmousetime!=timenow) {
                        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
                        mpoints.push(pps);
                        if (mpoints.length > mpoints_max)
                            mpoints.splice(0,1);
                        mousetravel = 0;
                        $('#sparkline5').sparkline(mpoints, {
                            tooltipSuffix: ' Use per second',
                            type: 'line',
                            width: '100%',
                            height: '200',
                            chartRangeMax: 50,
                            lineColor: '#ca9700',
                            fillColor: 'rgba(255,193,7,.3)',
                            highlightLineColor: 'rgba(255,193,7,.1)',
                            highlightSpotColor: 'rgba(255,193,7,.2)',
                        });
                    }
                    lastmousetime = timenow;
                    setTimeout(mdraw, mrefreshinterval);
                }
                // We could use setInterval instead, but I prefer to do it this way
                setTimeout(mdraw, mrefreshinterval); 
            };

        Sparkline();
        drawMouseSpeed();        
        var resize;
        $(window).resize(function(e) {
            clearTimeout(resize);
            resize = setTimeout(function() {
                Sparkline();
                drawMouseSpeed();
            }, 300);
        });
    });

})(jQuery);

