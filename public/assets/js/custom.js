/*

Template:  Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template
Author: potenzaglobalsolutions.com
Design and Developed by: potenzaglobalsolutions.com

NOTE: This file contains all scripts for the actual Template.

*/

/*================================================
[  Table of contents  ]
================================================

:: Predefined Variables
:: Tooltip
:: Preloader
:: PHP Contact Form
:: Counter
:: Back to top
:: NiceScroll
:: Mailchimp
:: PieChart
:: DataTable
:: Wow animation on scroll
:: Select
:: Accordion
:: Search
:: Sidebarnav
:: Fullscreenwindow
:: Today date and time
:: Summernote
:: Colorpicker
:: Touchspin
:: Editormarkdown
:: Rating
:: Calendar List View
:: Repeater form
:: Wizard form

======================================
[ End table content ]
======================================*/
//POTENZA var

 (function($){
  "use strict";
  var POTENZA = {};

  /*************************
  Predefined Variables
*************************/
var $window = $(window),
    $document = $(document),
    $body = $('body'),
    $countdownTimer = $('.countdown'),
    $bar = $('.bar'),
    $pieChart = $('.round-chart'),
    $counter = $('.counter'),
    $datetp = $('.datetimepicker');
    //Check if function exists
    $.fn.exists = function () {
        return this.length > 0;
    };

/*************************
      Tooltip
*************************/
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover()

/*************************
        Preloader
*************************/
  POTENZA.preloader = function () {
       $("#load").fadeOut();
       $('#pre-loader').delay(0).fadeOut('slow');
   };


 /*************************
       counter
*************************/
 POTENZA.counters = function () {
  var counter = jQuery(".counter");
  if(counter.length > 0) {
      loadScript(plugin_path + 'counter/jquery.countTo.js', function() {
        $counter.each(function () {
         var $elem = $(this);
           $elem.appear(function () {
             $elem.find('.timer').countTo();
          });
        });
      });
    }
  };

/*************************
     Back to top
*************************/
 POTENZA.goToTop = function () {
  var $goToTop = $('#back-to-top');
      $goToTop.hide();
        $window.scroll(function(){
          if ($window.scrollTop()>100) $goToTop.fadeIn();
          else $goToTop.fadeOut();
      });
    $goToTop.on("click", function () {
        $('body,html').animate({scrollTop:0},1000);
        return false;
    });
  }

/*************************
        NiceScroll
*************************/
    POTENZA.pniceScroll = function () {
        loadScript(plugin_path + 'nicescroll/jquery.nicescroll.js', function() {
        $(".scrollbar").niceScroll({
          scrollspeed: 150,
          mousescrollstep: 38,
          cursorwidth: 5,
          cursorborder: 0,
          cursorcolor: 'rgba(0,0,0,0.1)',
          autohidemode: true,
          zindex: 9,
          horizrailenabled: false,
          cursorborderradius: 0,
        });

        // menu scrollbar
        $('.side-menu .collapse').on('shown.bs.collapse', function () {
           $(".side-menu-fixed .scrollbar").getNiceScroll().resize();
         });


         $(".scrollbar-x").niceScroll({
          scrollspeed: 150,
          mousescrollstep: 38,
          cursorwidth: 5,
          cursorborder: 0,
          cursorcolor: 'rgba(0,0,0,0.1)',
          autohidemode: true,
          zindex: 9,
          verticalenabled: false,
          cursorborderradius: 0,
        });
       });
    }

/*************************
     mailchimp
*************************/
  POTENZA.mailchimp = function () {
         $(document).on('click','#mc-embedded-subscribe',function(event){
          event.preventDefault();
          var email_id = $('#mce-EMAIL').val();
          var val_email_id = validateEmail(email_id);
          if (email_id != "" && val_email_id === true) {
              var failure_message = 'Whoops, looks like there was a problem. Please try again later.';
              var memberid=email_id.toLowerCase();
              var url = memberid;

              $.ajax({
                 type: 'POST',
                 url: 'php/mailchimp-action.php',
                 data: {url:url},
                 dataType: 'json',
                 success: function(data){
                      $('#msg').html(data);
                 },
              });
          } else {
              $('#msg').html('<p style="color: #EA4335">Enter the E-mail id</p>');
              return false;
          }
          return false;
      });
      function validateEmail(email) {
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
      }
   }

/****************************************************
              pieChart
****************************************************/
 POTENZA.pieChart = function () {
        if ($pieChart.exists()) {
            loadScript(plugin_path + 'easy-pie-chart/easy-pie-chart.js', function() {
            $pieChart.each(function () {
                var $elem = $(this),
                    pieChartSize = $elem.attr('data-size') || "160",
                    pieChartAnimate = $elem.attr('data-animate') || "2000",
                    pieChartWidth = $elem.attr('data-width') || "6",
                    pieChartColor = $elem.attr('data-color') || "#84ba3f",
                    pieChartTrackColor = $elem.attr('data-trackcolor') || "rgba(0,0,0,0.10)";
                $elem.find('span, i').css({
                    'width': pieChartSize + 'px',
                    'height': pieChartSize + 'px',
                    'line-height': pieChartSize + 'px'
                });
                $elem.appear(function () {
                    $elem.easyPieChart({
                        size: Number(pieChartSize),
                        animate: Number(pieChartAnimate),
                        trackColor: pieChartTrackColor,
                        lineWidth: Number(pieChartWidth),
                        barColor: pieChartColor,
                        scaleColor: false,
                        lineCap: 'square',
                        onStep: function (from, to, percent) {
                            $elem.find('span.percent').text(Math.round(percent));
                        }
                    });
               });
            });
         });
      }
    }


/*************************
      DataTable
*************************/
POTENZA.datatables = function () {
   if ($('#datatable22').exists()) {
       loadScript(plugin_path + 'bootstrap-datatables/jquery.dataTables.min.js', function() {
       loadScript(plugin_path + 'bootstrap-datatables/dataTables.bootstrap4.min.js', function() {
      $('#datatable').DataTable();
     });
       });
    }
 };

/*********************************
    Wow animation on scroll
*********************************/
POTENZA.wowanimation = function () {
    if ($('.wow').exists()) {
        var wow = new WOW({
           animateClass: 'animated',
           offset: 100,
           mobile: false
        });
       wow.init();
     }
  }


/*************************
      select
*************************/
POTENZA.fancyselect = function () {
  if ($('.fancyselect').exists()) {
    loadScript(plugin_path + 'jquery-nice-select/jquery-nice-select.js', function() {
       $('select.fancyselect:not(.ignore)').niceSelect();
      });
    }
};

  /*************************
      Accordion
*************************/
  POTENZA.accordion = function () {

    $('.accordion').each(function (i, elem) {
       var $elem = $(this),
           $acpanel = $elem.find(".acd-group > .acd-des"),
           $acsnav =  $elem.find(".acd-group > .acd-heading");
          $acpanel.hide().first().slideDown("easeOutExpo");
          $acsnav.first().parent().addClass("acd-active");
          $acsnav.on('click', function () {
            if(!$(this).parent().hasClass("acd-active")){
              var $this = $(this).next(".acd-des");
              $acsnav.parent().removeClass("acd-active");
              $(this).parent().addClass("acd-active");
              $acpanel.not($this).slideUp("easeInExpo");
              $(this).next().slideDown("easeOutExpo");
            }else{
               $(this).parent().removeClass("acd-active");
               $(this).next().slideUp("easeInExpo");
            }
            return false;
        });
      });
  }

/*************************
       Search
*************************/
POTENZA.searchbox = function () {
   if (jQuery('.search').exists()) {
      jQuery('.search-btn').on("click", function () {
         jQuery('.search').toggleClass("search-open");
           return false;
          });
       jQuery("html, body").on('click', function (e) {
        if (!jQuery(e.target).hasClass("not-click")) {

             jQuery('.search').removeClass("search-open");
         }
     });
    }
}

/*************************
    Sidebarnav
*************************/
POTENZA.Sidebarnav = function () {
  /*Sidebar Navigation*/
    $(document).on('click', '#button-toggle', function (e) {
      $(".dropdown.open > .dropdown-toggle").dropdown("toggle");
      return false;
    });
    $(document).on('click', '#button-toggle', function (e) {
      $('.wrapper').toggleClass('slide-menu');
      return false;
    });

    $(document).on("mouseenter mouseleave",".wrapper > .side-menu-fixed", function(e) {
      if (e.type == "mouseenter") {
        $wrapper.addClass("sidebar-hover");
      }
      else {
        $wrapper.removeClass("sidebar-hover");
      }
      return false;
    });
    $(document).on("mouseenter mouseleave",".wrapper > .side-menu-fixed", function(e) {
      if (e.type == "mouseenter") {
        $wrapper.addClass("sidebar-hover");
      }
      else {
        $wrapper.removeClass("sidebar-hover");
      }
      return false;
    });

    $(document).on("mouseenter mouseleave",".wrapper > .setting-panel", function(e) {
      if (e.type == "mouseenter") {
        $wrapper.addClass("no-transition");
      }
      else {
        $wrapper.removeClass("no-transition");
      }
      return false;
    });
}

/*************************
    Fullscreenwindow
*************************/

POTENZA.Fullscreenwindow = function () {
    if ($('#btnFullscreen').exists()) {
   function toggleFullscreen(elem) {
    elem = elem || document.documentElement;
    if (!document.fullscreenElement && !document.mozFullScreenElement &&
      !document.webkitFullscreenElement && !document.msFullscreenElement) {
      if (elem.requestFullscreen) {
        elem.requestFullscreen();
      } else if (elem.msRequestFullscreen) {
        elem.msRequestFullscreen();
      } else if (elem.mozRequestFullScreen) {
        elem.mozRequestFullScreen();
      } else if (elem.webkitRequestFullscreen) {
        elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
      }
    } else {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      }
    }
  }
  document.getElementById('btnFullscreen').addEventListener('click', function() {
    toggleFullscreen();
  });
 }
}

/*************************
    Today date and time
*************************/

POTENZA.todatdayandtime = function () {
      var d = new Date();
      var weekday = new Array(7);
      weekday[0] = "Sunday";
      weekday[1] = "Monday";
      weekday[2] = "Tuesday";
      weekday[3] = "Wednesday";
      weekday[4] = "Thursday";
      weekday[5] = "Friday";
      weekday[6] = "Saturday";
      var n = weekday[d.getDay()];
      $('.today-day').html(n);
      var n =  new Date();
      var y = n.getFullYear();
      var m = n.getMonth() + 1;
      var d = n.getDate();
      $('.today-date').html(m + " / " + d + " / " + y);
    }

/*************************
    Summernote
*************************/

POTENZA.summernoteeditor = function () {
 if ($('#summernote').exists()) {
        $('#summernote').summernote({
        height: 300,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true                  // set focus to editable area after initializing summernote
      });
     }
   }

/*************************
    Colorpicker
*************************/

POTENZA.colorpicker = function () {
  if ($('#cp1, #cp2, #cp3, #cp4, #cp5, #cp6, #cp17, #cp8, #cp9, #cp10, #cp11, #cp12, #cp13').exists()) {
    $('#cp1').colorpicker();
    $('#cp2, #cp3a, #cp3b').colorpicker();
    $('#cp4').colorpicker({"color": "#16813D"});
    $('#cp5').colorpicker({ format: null });
    $('#cp5b').colorpicker({ format: "rgba"  });
    $('#cp6').colorpicker({ horizontal: true });
    $('#cp7').colorpicker({
      color: '#DD0F20',
      inline: true,
      container: true
    });
     $('#cp8').colorpicker({
      color: '#F18A31',
      inline: true,
      container: '#cp8_container'
    });
     $('#cp9').colorpicker({
      useAlpha: false
    });
     $('#cp10').colorpicker({
      useHashPrefix: false
    });
     $('#cp11').colorpicker({
      fallbackColor: 'rgb(48, 90, 162)'
    });
     $('#cp12').colorpicker();
     $('#cp13').colorpicker({
      autoInputFallback: false
    });
  }
 }

/*************************
    Touchspin
*************************/

 POTENZA.ptTouchSpin = function () {
   if ($('input.touchspin-input').exists()) {
      $("input[name='demo1'].touchspin-input").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='demo2'].touchspin-input").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='demo_vertical'].touchspin-input").TouchSpin({
          verticalbuttons: true
        });

        $("input[name='demo_vertical2'].touchspin-input").TouchSpin({
          verticalbuttons: true,
          verticalupclass: 'fa fa-plus',
          verticaldownclass: 'fa fa-minus'
        });
        $("input.touchspin-input").TouchSpin();
        $("input[name='demo3_21'].touchspin-input,input[name='demo3_22'].touchspin-input").TouchSpin({
              initval: 40
        });
        $("input[name='demo4'].touchspin-input").TouchSpin({
            postfix: "a button",
            postfix_extraclass: "btn btn-default"
        });
       $("input[name='demo4_2'].touchspin-input").TouchSpin({
          postfix: "a button",
          postfix_extraclass: "btn btn-default"
      });
     }
  }

/*************************
    Editormarkdown
*************************/

POTENZA.editormarkdown = function () {
  if ($('#editor-markdown-01, #editor-markdown-02, #editor-markdown-03').exists()) {
    new SimpleMDE({
      element: document.getElementById("editor-markdown-01"),
      spellChecker: false,
    });

    new SimpleMDE({
      element: document.getElementById("editor-markdown-02"),
      spellChecker: false,
      autosave: {
        enabled: true,
        unique_id: "editor-markdown-02",
      },
    });

    new SimpleMDE({
      element: document.getElementById("editor-markdown-03"),
      status: false,
      toolbar: false,
    });
  }
}

/*************************
    Rating
*************************/

POTENZA.ptrating = function () {
        $('#default').raty({
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-warning'
        });
        $('#score').raty({
            score: 3,
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-danger'
        });
        $('#score-callback').raty({
            score: function () {
                return $(this).attr('data-score');
            }
        });
        $('#scoreName').raty({
            scoreName: 'entity[score]',
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-warning'
        });
        $('#number').raty({
            number: 10,
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-danger'
        });
         $('#number-callback').raty({
            number: function () {
                return $(this).attr('data-number');
            }
        });
        $('#numberMax').raty({
            numberMax: 5,
            number: 100,
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-purple'
        });
        $('#readOnly').raty({
            readOnly: true,
            score: 3,
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-success'
        });
        $('#readOnly-callback').raty({
            readOnly: function () {
                return 'true becomes readOnly' == 'true becomes readOnly';
            }
        });
        $('#noRatedMsg').raty({
            readOnly: true,
            noRatedMsg: "I'am readOnly and I haven't rated yet!",
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-danger'
        });
        $('#halfShow-true').raty({
            score: 3.26
        });
        $('#halfShow-false').raty({
            halfShow: false,
            score: 3.26,
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-danger'
        });
        $('#round').raty({
            round: {down: .26, full: .6, up: .76},
            score: 3.26,
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-pink'
        });
        $('#half').raty({
            half: true
        });
        $('#starHalf').raty({
            half: true,
            starHalf: 'fa fa-star-half text-danger',
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-danger'
        });
        $('#click').raty({
            click: function (score, evt) {
                alert('ID: ' + $(this).attr('id') + "\nscore: " + score + "\nevent: " + evt.type);
            }
        });
        $('#hints').raty({hints: ['a', null, '', undefined, '*_*']});
        $('#star-off-and-star-on').raty({
            starOff: 'fa fa-bell-o text-muted',
            starOn: 'fa fa-bell text-custom'
        });
        $('#cancel').raty({
            cancel: true,
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-danger'
        });
        $('#cancelHint').raty({
            cancel: true,
            cancelHint: 'My cancel hint!',
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-success'
        });
        $('#cancelPlace').raty({
            cancel: true,
            cancelPlace: 'right',
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-purple'
        });
        $('#cancel-off-and-cancel-on').raty({
            cancel: true,
            cancelOff: 'fa fa-minus-square-o text-muted',
            cancelOn: 'fa fa-minus-square text-danger'
        });
        $('#iconRange').raty({
            iconRange: [
                {range: 1, on: 'fa fa-cloud', off: 'fa fa-circle-o'},
                {range: 2, on: 'fa fa-cloud-download', off: 'fa fa-circle-o'},
                {range: 3, on: 'fa fa-cloud-upload', off: 'fa fa-circle-o'},
                {range: 4, on: 'fa fa-circle', off: 'fa fa-circle-o'},
                {range: 5, on: 'fa fa-cogs', off: 'fa fa-circle-o'}
            ]
        });
        $('#size-md').raty({
            cancel: true,
            half: true
        });
        $('#size-lg').raty({
            cancel: true,
            half: true
        });
      $('#target-div').raty({
            cancel: true,
            target: '#target-div-hint',
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-custom'
        });
       $('#targetType').raty({
            cancel: true,
            target: '#targetType-hint',
            targetType: 'score',
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-warning'
        });
        $('#targetFormat').raty({
            target: '#targetFormat-hint',
            targetFormat: 'Rating: {score}',
            starOff: 'fa fa-star-o text-muted',
            starOn: 'fa fa-star text-danger'
        });
        $('#mouseover').raty({
            mouseover: function (score, evt) {
                alert('ID: ' + $(this).attr('id') + "\nscore: " + score + "\nevent: " + evt.type);
            }
        });
        $('#mouseout').raty({
            width: 150,
            mouseout: function (score, evt) {
                alert('ID: ' + $(this).attr('id') + "\nscore: " + score + "\nevent: " + evt.type);
            }
        });
}


/*************************
    Calendar List View
*************************/

POTENZA.calendarlist = function () {
  if ($('#calendar-list').exists()) {
     $('#calendar-list').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'listDay,listWeek,month'
      },
      // customize the button names,
      // otherwise they'd all just say "list"
      views: {
        listDay: { buttonText: 'list day' },
        listWeek: { buttonText: 'list week' }
      },

      defaultView: 'listWeek',
      defaultDate: '2018-03-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-03-01'
        },
        {
          title: 'Long Event',
          start: '2018-03-07',
          end: '2018-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-03-11',
          end: '2018-03-13'
        },
        {
          title: 'Meeting',
          start: '2018-03-12T10:30:00',
          end: '2018-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-03-28'
        }
      ]
    });
    }
}

/*************************
   repeater form
*************************/

POTENZA.repeaterform = function () {
  if ($('.repeater, .repeater-file, .repeater-add').exists()) {
    $('.repeater, .repeater-file, .repeater-add').repeater({
          show: function () {
              $(this).slideDown();
              $(this).find('select').niceSelect();
          }
      });
    }
}

/*************************
   wizard form
*************************/

POTENZA.wizardform = function () {
 if ($('#example-form, #example-basic, #example-manipulation, #example-vertical').exists()) {
   var form = $("#example-form");
      form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
      });
     form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "fade",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            alert("Submitted!");
        }
     });

     $("#example-basic").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "fade",
      autoFocus: true
    });

    $("#example-manipulation").steps({
      headerTag: "h3",
      bodyTag: "section",
      enableAllSteps: true,
      enablePagination: false
    });

    $("#example-vertical").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "fade",
      stepsOrientation: "vertical"
    });
  }
 }

/*************************
   Dynamic active menu
*************************/

POTENZA.navactivation = function () {
    var path = window.location.pathname.split("/").pop();
    var target = $('.side-menu-fixed .navbar-nav a[href="'+path+'"]');
    target.parent().addClass('active');
    $('.side-menu-fixed .navbar-nav li.active').parents('li').addClass('active');
}

/****************************************************
          javascript
****************************************************/
var _arr  = {};
  function loadScript(scriptName, callback) {
    if (!_arr[scriptName]) {
      _arr[scriptName] = true;
      var body    = document.getElementsByTagName('body')[0];
      var script    = document.createElement('script');
      script.type   = 'text/javascript';
      script.src    = scriptName;
      // then bind the event to the callback function
      // there are several events for cross browser compatibility
      // script.onreadystatechange = callback;
      script.onload = callback;
      // fire the loading
      body.appendChild(script);
    } else if (callback) {
      callback();
    }
  };

/****************************************************
     POTENZA Window load and functions
****************************************************/
  //Window load functions
    $window.on("load",function(){
          POTENZA.preloader(),
          POTENZA.pieChart();
    });
 //Document ready functions
    $document.ready(function () {
        POTENZA.counters(),
        POTENZA.goToTop(),
        POTENZA.pniceScroll(),
        POTENZA.mailchimp(),
        POTENZA.accordion(),
        POTENZA.datatables(),
        POTENZA.wowanimation(),
        POTENZA.fancyselect(),
        POTENZA.searchbox(),
        POTENZA.Sidebarnav(),
        POTENZA.todatdayandtime(),
        POTENZA.summernoteeditor(),
        POTENZA.colorpicker(),
        POTENZA.editormarkdown(),
        POTENZA.ptTouchSpin(),
        POTENZA.ptrating(),
        POTENZA.calendarlist(),
        POTENZA.repeaterform(),
        POTENZA.wizardform(),
        POTENZA.navactivation(),
        POTENZA.Fullscreenwindow();
    });
})(jQuery);
