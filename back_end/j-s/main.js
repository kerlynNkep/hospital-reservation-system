$(document).ready(function () {
   $(".button-collapse").sideNav();
    $('.collapsible').collapsible({
      accordion : false
    });
    $('select').material_select();

    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: 5,
        min:  true,
        max: 100
    });
    $('.collapsible').collapsible({});

	$(function() {
	     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	     $(".side-nav li a").each(function(){
	          if($(this).attr("href") == pgurl || $(this).attr("href") == '' && pgurl != 'index' ){
	     	  	  $(this).addClass("active");
	          }
	     	  else if (pgurl =='') 
	     	      $('.side-nav li').first().addClass('active');
	     	  else
	           	  $('.side-nav li').first().addClass('activ');
	     });
	});

    /*
				date store today date.
				d store today date.
				m store current month.
				y store current year.
			*/
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
			
			/*
				Initialize fullCalendar and store into variable.
				Why in variable?
				Because doing so we can use it inside other function.
				In order to modify its option later.
			*/
			
			var calendar = $('#calendar').fullCalendar(
			{
				/*
					header option will define our calendar header.
					left define what will be at left position in calendar
					center define what will be at center position in calendar
					right define what will be at right position in calendar
				*/
				header:
				{
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				/*
					defaultView option used to define which view to show by default,
					for example we have used agendaWeek.
				*/
				defaultView: 'agendaWeek',
				/*
					selectable:true will enable user to select datetime slot
					selectHelper will add helpers for selectable.
				*/
				selectable: true,
				selectHelper: true,
				/*
					when user select timeslot this option code will execute.
					It has three arguments. Start,end and allDay.
					Start means starting time of event.
					End means ending time of event.
					allDay means if events is for entire day or not.
				*/
				select: function(start, end, allDay)
				{
					/*
						after selection user will be promted for enter title for event.
					*/
					var title = prompt('Event Title:');
					/*
						if title is enterd calendar will add title and event into fullCalendar.
					*/
					if (title)
					{
						calendar.fullCalendar('renderEvent',
							{
								title: title,
								start: start,
								end: end,
								allDay: allDay
							},
							true // make the event "stick"
						);
					}
					calendar.fullCalendar('unselect');
				},
				/*
					editable: true allow user to edit events.
				*/
				editable: true,
				/*
					events is the main option for calendar.
					for demo we have added predefined events in json object.
				*/
				events: [
					{
						title: 'Confirming appts',
						start: new Date(y, m, 1),
						//end: new Date(y, m, 5),
						editable: false,
						backgroundColor: '#228B22'
					},/*
					{
						title: 'Long Event',
						start: new Date(y, m, d-5),
						end: new Date(y, m, d-2)
					},*/
					{
						id: 999,
						title: 'recommend to patient A11',
						start: new Date(y, m, d-3, 16, 0),
						//end: new Date(y, m, d, 14, 0),
						allDay: false,
						editable: false,
						backgroundColor: '#DC143C'
					},
					{
						id: 999,
						title: 'send request to doctor1',
						start: new Date(y, m, d+4, 16, 0),
						//end: new Date(y, m, d+6, 16, 0),
						allDay: false,
						editable: false,
						backgroundColor: '#228B22'
					},
					{
						title: 'draft report',
						start: new Date(y, m, d+5, 10, 30),
						//end: new Date(y, m, d+8, 14, 0),
						allDay: false,
						editable: false
					},
					{
						title: 'final report',
						start: new Date(y, m, d+6, 12, 0),
						//end: new Date(y, m, d+8, 14, 0),
						allDay: false,
						editable: false
					},
					{
						title: 'Check system',
						start: new Date(y, m, d+1, 19, 0),
						//end: new Date(y, m, d+3, 19, 10),
						allDay: false,
						editable: false,
						backgroundColor: '#228B22'
					},
					{
						title: 'Click for Google',
						start: new Date(y, m, 28),
						end: new Date(y, m, 29),
						url: 'http://google.com/'
					}
				]
			});
});