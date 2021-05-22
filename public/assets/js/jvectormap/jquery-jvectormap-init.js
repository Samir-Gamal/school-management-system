/*

Template: Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template
Author: potenzaglobalsolutions.com
Design and Developed by: potenzaglobalsolutions.com

NOTE:  This file includes jvectormap all map script. You can change anything related to jvectormap in this file. 
*/

 (function($){
  "use strict";
    $(document).ready(function () {

   //Check if function exists
    $.fn.exists = function () {
        return this.length > 0;
    };

/*************************
   world-map-markers
*************************/ 
  if ($('#world-map-markers').exists()) {
      $('#world-map-markers').vectorMap({
        map: 'world_mill',
        scaleColors: ['#C8EEFF', '#0071A4'],
        normalizeFunction: 'polynomial',
        hoverOpacity: 0.7,
        hoverColor: false,
        markerStyle: {
          initial: {
            fill: '#84ba3f',
            stroke: '#FFFFFF'
          }
        },
         regionStyle: {
            initial: {
                fill: '#d7dbde',
                "fill-opacity": 3,
                stroke: '#d7dbde',
                "stroke-width": 0,
                "stroke-opacity": 0
            },
            hover: {
                "fill-opacity": 0.6
            }
        },
        backgroundColor: 'white',
        markers: [
          {latLng: [41.90, 12.45], name: 'Vatican City'},
          {latLng: [43.73, 7.41], name: 'Monaco'},
          {latLng: [-0.52, 166.93], name: 'Nauru'},
          {latLng: [-8.51, 179.21], name: 'Tuvalu'},
          {latLng: [43.93, 12.46], name: 'San Marino'},
          {latLng: [47.14, 9.52], name: 'Liechtenstein'},
          {latLng: [7.11, 171.06], name: 'Marshall Islands'},
          {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
          {latLng: [3.2, 73.22], name: 'Maldives'},
          {latLng: [35.88, 14.5], name: 'Malta'},
          {latLng: [12.05, -61.75], name: 'Grenada'},
          {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
          {latLng: [13.16, -59.55], name: 'Barbados'},
          {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
          {latLng: [-4.61, 55.45], name: 'Seychelles'},
          {latLng: [7.35, 134.46], name: 'Palau'},
          {latLng: [42.5, 1.51], name: 'Andorra'},
          {latLng: [14.01, -60.98], name: 'Saint Lucia'},
          {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
          {latLng: [1.3, 103.8], name: 'Singapore'},
          {latLng: [1.46, 173.03], name: 'Kiribati'},
          {latLng: [-21.13, -175.2], name: 'Tonga'},
          {latLng: [15.3, -61.38], name: 'Dominica'},
          {latLng: [-20.2, 57.5], name: 'Mauritius'},
          {latLng: [26.02, 50.55], name: 'Bahrain'},
          {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
        ]
      });
    }

/*************************
       USA
*************************/ 
   if ($('#usa').exists()) {
      $('#usa').vectorMap({
        map : 'us_lcc',
        backgroundColor : 'transparent',
        regionStyle : {
          initial : {
            fill : '#e71029'
          }
        }
      });
    }

/*************************
       Australia
*************************/
    if ($('#australia').exists()) {
      $('#australia').vectorMap({
        map : 'au_mill',
        backgroundColor : 'transparent',
        regionStyle : {
          initial : {
            fill : '#00008b'
          }
        }
      });
    }

/*************************
       Asia
*************************/
   if ($('#asia').exists()) {
    $('#asia').vectorMap({
        map : 'asia_mill',
        backgroundColor : 'transparent',
        regionStyle : {
          initial : {
            fill : '#00c7b1'
          }
        }
      });
  }

/*************************
       North america
*************************/
  if ($('#north-america').exists()) {
     $('#north-america').vectorMap({
        map : 'north_america_mill',
        backgroundColor : 'transparent',
        regionStyle : {
          initial : {
            fill : '#128807'
          }
        }
      });
  }

/*************************
      India
*************************/
 if ($('#india').exists()) {
    $('#india').vectorMap({
        map : 'in_mill',
        backgroundColor : 'transparent',
        regionStyle : {
          initial : {
            fill : '#ff9933'
          }
        }
      });
  }
 });

})(jQuery);