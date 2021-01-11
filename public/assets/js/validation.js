/*

Template:  Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template
Author: potenzaglobalsolutions.com
Design and Developed by: potenzaglobalsolutions.com

NOTE: 

*/

 (function($){
  "use strict";
    $.validator.setDefaults( {
        submitHandler: function () {
          alert( "submitted!" );
        }
      });
     $.validator.setDefaults( {
      submitHandler: function () {
        alert( "submitted!" );
      }
    });

    $( document ).ready( function () {
      $( "#signupForm" ).validate( {
        rules: {
          fname: "required",
          lname: "required",
          uname: {
            required: true,
            minlength: 2
          },
          upassword: {
            required: true,
            minlength: 5
          },
          uconfirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#password"
          },
          uemail: {
            required: true,
            email: true
          },
          uagree: "required"
        },
        messages: {
          fname: "Please enter your firstname",
          lname: "Please enter your lastname",
          uname: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
          },
          upassword: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          uconfirm_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
          },
          uemail: "Please enter a valid email address",
          uagree: "Please accept our policy"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );

      $( "#signupForm1" ).validate( {
        rules: {
          firstname1: "required",
          lastname1: "required",
          username1: {
            required: true,
            minlength: 2
          },
          password1: {
            required: true,
            minlength: 5
          },
          confirm_password1: {
            required: true,
            minlength: 5,
            equalTo: "#password1"
          },
          email1: {
            required: true,
            email: true
          },
          agree1: "required"
        },
        messages: {
          firstname1: "Please enter your firstname",
          lastname1: "Please enter your lastname",
          username1: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
          },
          password1: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          confirm_password1: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
          },
          email1: "Please enter a valid email address",
          agree1: "Please accept our policy"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          // Add `has-feedback` class to the parent div.form-group
          // in order to add icons to inputs
          element.parents( ".col-sm-5" ).addClass( "has-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }

          // Add the span element, if doesn't exists, and apply the icon classes to it.
          if ( !element.next( "span" )[ 0 ] ) {
            $( "<span class='fa fa-times form-control-feedback pr-2'></span>" ).insertAfter( element );
          }
        },
        success: function ( label, element ) {
          // Add the span element, if doesn't exists, and apply the icon classes to it.
          if ( !$( element ).next( "span" )[ 0 ] ) {
            $( "<span class='fa fa-check form-control-feedback'></span>" ).insertAfter( $( element ) );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
          $( element ).next( "span" ).addClass( "fa fa-times" ).removeClass( "fa fa-check" );
        },
        unhighlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
          $( element ).next( "span" ).addClass( "fa fa-check" ).removeClass( "fa fa-times" );
        }
      });
      $( "#signupForm3" ).validate( {
        rules: {
          firstname: "required",
          lastname: "required",
          username: {
            required: true,
            minlength: 2
          },
          password: {
            required: true,
            minlength: 5
          },
          confirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#password"
          },
          email: {
            required: true,
            email: true
          },
          agree: "required"
        },
        messages: {
          firstname: "Please enter your firstname",
          lastname: "Please enter your lastname",
          username: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          confirm_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
          },
          email: "Please enter a valid email address",
          agree: "Please accept our policy"
        },
        errorPlacement: function ( error, element ) {
          error.addClass( "ui red pointing label transition" );
          error.insertAfter( element.parent() );
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".row" ).addClass( errorClass );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".row" ).removeClass( errorClass );
        }
      } );

    });

 })(jQuery);