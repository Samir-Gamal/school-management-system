/*

Template:  Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template
Author: potenzaglobalsolutions.com
Design and Developed by: potenzaglobalsolutions.com

NOTE: 

*/

 (function($){
  "use strict";
  $(function () {
      $('#lobilist-demo').lobiList({
          
          lists: [
        {
            title: 'TODO',
            defaultStyle: 'lobilist-info',
            items: [
                {
                    title: 'Floor cool cinders',
                    description: 'Thunder fulfilled travellers folly, wading, lake.',
                    dueDate: '2015-01-31'
                },
                {
                    title: 'Periods pride',
                    description: 'Accepted was mollis',
                    done: true
                },
                {
                    title: 'Flags better burns pigeon',
                    description: 'Rowed cloven frolic thereby, vivamus pining gown intruding strangers prank treacherously darkling.'
                },
                {
                    title: 'Accepted was mollis',
                    description: 'Rowed cloven frolic thereby, vivamus pining gown intruding strangers prank treacherously darkling.',
                    dueDate: '2015-02-02'
                }
            ]
        },
        {
            title: 'DOING',
            items: [
                {
                    title: 'Composed trays',
                    description: 'Hoary rattle exulting suspendisse elit paradises craft wistful. Bayonets allures prefer traits wrongs flushed. Tent wily matched bold polite slab coinage celerities gales beams.'
                },
                {
                    title: 'Chic leafy'
                },
                {
                    title: 'Guessed interdum armies chirp writhes most',
                    description: 'Came champlain live leopards twilight whenever warm read wish squirrel rock.',
                    dueDate: '2015-02-04',
                    done: true
                }
            ]
        }
    ]
  });
 
 $('#lobilist-demo-02').lobiList({
    lists: [
        {
            title: 'TODO',
            defaultStyle: 'lobilist-info',
            items: [
                {
                    title: 'Floor cool cinders',
                    description: 'Thunder fulfilled travellers folly, wading, lake.',
                    dueDate: '2015-01-31'
                }
            ]
        }
    ],
    afterListAdd: function(lobilist, list){
        var $dueDateInput = list.$el.find('form [name=dueDate]');
        $dueDateInput.datepicker();
    }
   });
 
  $('#lobilist-demo-03').lobiList({
   lists: [
        {
            title: 'TODO',
            defaultStyle: 'lobilist-info',
            controls: ['edit', 'styleChange'],
            items: [
                {
                    title: 'Floor cool cinders',
                    description: 'Thunder fulfilled travellers folly, wading, lake.',
                    dueDate: '2015-01-31'
                }
            ]
        },
        {
            title: 'Disabled custom checkboxes',
            defaultStyle: 'lobilist-danger',
            controls: ['edit', 'add', 'remove'],
            useLobicheck: false,
            items: [
                {
                    title: 'Periods pride',
                    description: 'Accepted was mollis',
                    done: true
                }
            ]
        },
        {
            title: 'Controls disabled',
            controls: false,
            items: [
                {
                    title: 'Composed trays',
                    description: 'Hoary rattle exulting suspendisse elit paradises craft wistful. ' +
                    'Bayonets allures prefer traits wrongs flushed. Tent wily matched bold polite slab coinage ' +
                    'celerities gales beams.'
                }
            ]
        },
        {
            title: 'Disabled todo edit/remove',
            enableTodoRemove: false,
            enableTodoEdit: false,
            items: [
                {
                    title: 'Composed trays',
                    description: 'Hoary rattle exulting suspendisse elit paradises craft wistful. ' +
                    'Bayonets allures prefer traits wrongs flushed. Tent wily matched bold polite slab coinage ' +
                    'celerities gales beams.'
                }
            ]
        }
    ]


   });
 
  $('#lobilist-demo-04').lobiList({
  sortable: false,
    lists: [
        {
            title: 'TODO',
            defaultStyle: 'lobilist-info',
            controls: ['edit', 'styleChange'],
            items: [
                {
                    title: 'Floor cool cinders',
                    description: 'Thunder fulfilled travellers folly, wading, lake.',
                    dueDate: '2015-01-31'
                }
            ]
        },
        {
            title: 'Controls disabled',
            controls: false,
            items: [
                {
                    title: 'Composed trays',
                    description: 'Hoary rattle exulting suspendisse elit paradises craft wistful. Bayonets allures prefer traits wrongs flushed. Tent wily matched bold polite slab coinage celerities gales beams.'
                }
            ]
        }
    ]
   });
 });

 })(jQuery);