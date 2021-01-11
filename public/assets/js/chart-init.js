/*

Template:  Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template
Author: potenzaglobalsolutions.com
Design and Developed by: potenzaglobalsolutions.com

NOTE: 

*/

 (function($){
  "use strict";
// Line Stacked

   //Check if function exists
    $.fn.exists = function () {
        return this.length > 0;
    };

/*************************
  Line Chart
*************************/ 
    var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
     var config = {
        type: 'line',
        data: {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [{
            label: "Facebook",
            borderColor: window.chartColors.red,
            backgroundColor: window.chartColors.red,
            data: [
                     randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor()
                  ],
      }, {
        label: "Twitter",
        borderColor: window.chartColors.blue,
        backgroundColor: window.chartColors.blue,
        data: [
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor()
                  ],
      }, {
        label: "LinkedIn",
        borderColor: window.chartColors.green,
        backgroundColor: window.chartColors.green,
        data: [
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor()
                  ],
      }, {
        label: "Google+",
        borderColor: window.chartColors.yellow,
        backgroundColor: window.chartColors.yellow,
        data: [
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor(),
                      randomScalingFactor()
                  ],
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      title:{
        display:false,
        text:"Line Chart - Stacked Area"
      },
      tooltips: {
        mode: 'index',
      },
      hover: {
        mode: 'index'
      },
      scales: {
        xAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Month'
          }
        }],
        yAxes: [{
          stacked: true,
          scaleLabel: {
            display: true,
            labelString: 'Price'
          }
        }]
      }
    }
  };

/*************************
     Line Styles
*************************/ 
var config2 = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Unfilled",
                    fill: false,
                    backgroundColor: window.chartColors.blue,
                    borderColor: window.chartColors.blue,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                }, {
                    label: "Dashed",
                    fill: false,
                    backgroundColor: window.chartColors.green,
                    borderColor: window.chartColors.green,
                    borderDash: [5, 5],
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                }, {
                    label: "Filled",
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    text:'Line Chart - Line styles'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        };

/*************************
     doughnut
*************************/ 
        var config3 = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
            },
            title: {
                display: false,
                text: 'Doughnut Chart'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
     };
 

/*************************
        combo
*************************/ 
    var timeFormat = 'MM/DD/YYYY HH:mm';
    function newDateString(days) {
      return moment().add(days, 'd').format(timeFormat);
    }
    var color = Chart.helpers.color;
    var config4 = {
      type: 'bar',
      data: {
        labels: [
          newDateString(0), 
          newDateString(1), 
          newDateString(2), 
          newDateString(3), 
          newDateString(4), 
          newDateString(5), 
          newDateString(6)
        ],
        datasets: [{
          type: 'bar',
          label: 'Dataset 1',
          backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
          borderColor: window.chartColors.red,
          data: [
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor()
          ],
        }, {
          type: 'bar',
          label: 'Dataset 2',
          backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
          borderColor: window.chartColors.blue,
          data: [
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor()
          ],
        }, {
          type: 'line',
          label: 'Dataset 3',
          backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
          borderColor: window.chartColors.green,
          fill: false,
          data: [
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor(), 
            randomScalingFactor()
          ],
        }, ]
      },
      options: {
        maintainAspectRatio: false,
        responsive:true,
                title: {
                    text:"Combo Time Scale"
                },
        scales: {
          xAxes: [{
            type: "time",
            display: true,
            time: {
              format: timeFormat
            }
          }],
        },
      }
    };
 
 /*************************
        Custom Points
*************************/ 
 var customTooltips = function (tooltip) {
      $(this._chart.canvas).css("cursor", "pointer");
      var positionY = this._chart.canvas.offsetTop;
      var positionX = this._chart.canvas.offsetLeft;
      $(".chartjs-tooltip").css({
        opacity: 0,
      });
      if (!tooltip || !tooltip.opacity) {
        return;
      }
      if (tooltip.dataPoints.length > 0) {
        tooltip.dataPoints.forEach(function (dataPoint) {
          var content = [dataPoint.xLabel, dataPoint.yLabel].join(": ");
          var $tooltip = $("#tooltip-" + dataPoint.datasetIndex);

          $tooltip.html(content);
          $tooltip.css({
            opacity: 1,
            top: positionY + dataPoint.y + "px",
            left: positionX + dataPoint.x + "px",
          });
        });
      }
    };
    var color = Chart.helpers.color;
    var lineChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [{
        label: "My First dataset",
        backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
        borderColor: window.chartColors.red,
        pointBackgroundColor: window.chartColors.red,
        data: [
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor()
        ]
      }, {
        label: "My Second dataset",
        backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
        borderColor: window.chartColors.blue,
        pointBackgroundColor: window.chartColors.blue,
        data: [
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor()
        ]
      }]
    };

 /*************************
      Chart Basic
*************************/ 
    var config6 = {
      type: 'line',
      data: {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [{
              label: "My First dataset",
              backgroundColor: window.chartColors.red,
              borderColor: window.chartColors.red,
              data: [
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor()
              ],
              fill: false,
          }, {
              label: "My Second dataset",
              fill: false,
              backgroundColor: window.chartColors.blue,
              borderColor: window.chartColors.blue,
              data: [
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor()
              ],
          }]
      },
      options: {
          maintainAspectRatio: false,
          responsive:true,
          title:{
              display:true,
              text:'Line Chart - Basic'
          },
          tooltips: {
              mode: 'index',
              intersect: false,
          },
          hover: {
              mode: 'nearest',
              intersect: true
          },
          scales: {
              xAxes: [{
                  display: true,
                  scaleLabel: {
                      display: true,
                      labelString: 'Month'
                  }
              }],
              yAxes: [{
                  display: true,
                  scaleLabel: {
                      display: true,
                      labelString: 'Value'
                  }
              }]
          }
      }
  };

 /*************************
     Different Point Sizes
*************************/
 var config7 = {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "dataset - big points",
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                fill: false,
                borderDash: [5, 5],
                pointRadius: 15,
                pointHoverRadius: 10,
            }, {
                label: "dataset - individual point sizes",
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                fill: false,
                borderDash: [5, 5],
                pointRadius: [2, 4, 6, 18, 0, 12, 20],
            }, {
                label: "dataset - large pointHoverRadius",
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                backgroundColor: window.chartColors.green,
                borderColor: window.chartColors.green,
                fill: false,
                pointHoverRadius: 30,
            }, {
                label: "dataset - large pointHitRadius",
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                backgroundColor: window.chartColors.yellow,
                borderColor: window.chartColors.yellow,
                fill: false,
                pointHitRadius: 20,
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive:true,
            legend: {
                position: 'bottom',
            },
            hover: {
                mode: 'index'
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            },
            title: {
                display: true,
                text: 'Line Chart - Different point sizes'
            }
        }
    };   

/*************************
    Chart Stacked
*************************/
          var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: window.chartColors.red,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: window.chartColors.blue,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 3',
                backgroundColor: window.chartColors.green,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]
        };       

 /*************************
    window onload
*************************/
        window.onload = function() {
          if ($('#canvas1').exists()) {
           var ctx1 = document.getElementById("canvas1").getContext("2d");
            window.myLine1 = new Chart(ctx1, config);
          }
         if ($('#canvas2').exists()) {
           var ctx2 = document.getElementById("canvas2").getContext("2d");
            window.myLine2 = new Chart(ctx2, config2);
          }
           if ($('#canvas3').exists()) {
            var ctx3 = document.getElementById("canvas3").getContext("2d");
            window.myLine3 = new Chart(ctx3, config3);
          }
           if ($('#canvas4').exists()) {
            var ctx4 = document.getElementById("canvas4").getContext("2d");
            window.myLine4 = new Chart(ctx4, config4);
          }
          if ($('#canvas5').exists()) {
           var chartEl = document.getElementById("canvas5");
              var chart = new Chart(chartEl, {
                type: "line",
                data: lineChartData,
                options: {
                  maintainAspectRatio: false,
                  responsive:true,
                  title:{
                    display: true,
                    text: "Custom Tooltips using Data Points"
                  },
                  tooltips: {
                    enabled: false,
                    mode: 'index',
                    intersect: false,
                    custom: customTooltips
                  }
                }
              });
            };
          }
           if ($('#canvas6').exists()) {   
            var ctx6 = document.getElementById("canvas6").getContext("2d");
            window.myLine6 = new Chart(ctx6, config6);
          }
          if ($('#canvas7').exists()) {
            var ctx7 = document.getElementById("canvas7").getContext("2d");
            window.myLine7 = new Chart(ctx7, config7);
          }
          if ($('#canvas8').exists()) {
            var ctx8 = document.getElementById("canvas8").getContext("2d");
            window.myBar = new Chart(ctx8, {
                type: 'bar',
                data: barChartData,
                options: {
                  maintainAspectRatio: false,
                  responsive:true,
                    title:{
                        display:true,
                        text:"Bar Chart - Stacked"
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }
                }
            });
          }

 })(jQuery);

