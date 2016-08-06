var CALENDAR = function () {
	var wrap, label,
			months = ["January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December"];

		function init(newWrap) {
			wrap  = $(newWrap || "#cal");
			label = wrap.find("#label");

			wrap.find("#prev").bind("click.calender", function () { switchMonth(false); });
			wrap.find("#next").bind("click.calender", function () { switchMonth(true); });
			label.bind("click.calendar", function () { switchMonth(null, new Date().getMonth(), new Date().getFullYear() ); });
		}

		function switchMonth(next, month, year) {
			var curr = label.text().trim().split(" "), calendar, tempYear = parseInt(curr[1], 10);

			month = month || ((next) ? ((curr[0] === "December") ? 0 : months.indexOf(curr[0]) + 1) : ( (curr[0] === "January") ? 11 : months.indexOf(curr[0]) - 1) );
			year  = year  || ((next && month === 0) ? tempYear + 1 : (!next && month === 11) ? tempYear -1 : tempYear);

			console.profile("createCal");
			calendar = createCal(year, month);
			console.profileEnd("createCal");

			$("#cal-frame", wrap)
				.find(".curr")
					.removeClass("curr")
					.addClass("temp")
				.end()
				.prepend(calendar.calendar())
				.find(".temp")
					.fadeOut("slow", function () { $(this).remove(); });
			label.text(calendar.label);
		}

	function createCal(year, month) {
		var day = 1, i, j, haveDays = true,
				startDay = new Date(year, month, day).getDay(),
				daysInMonth = [31, (((year%4===0)&&(year%100!==0))||(year%400===0)) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ],
				calendar = [];
		if (createCal.cache[year]) {
			if (createCal.cache[year][month]) {
				return createCal.cache[year][month];
			}
		} else {
			createCal.cache[year] = {};
		}
		i = 0;
		while(haveDays) {
			calendar[i] = [];
			for (j = 0; j < 7; j++) {
				if (i === 0) {
					if (j === startDay) {
						calendar[i][j] = day++;
						startDay++;
					}
				} else if ( day <= daysInMonth[month]) {
					calendar[i][j] = day++;
				} else {
					calendar[i][j] = "";
					haveDays = false;
				}
				if (day > daysInMonth[month]) {
					haveDays = false;
				}
			}
			i++;
		}

		if (calendar[5]) {
			for (i = 0; i < calendar[5].length; i++) {
				if (calendar[5][i] !== "") {
					calendar[4][i] = "<span>" + calendar[4][i] + "</span><span>" + calendar[5][i] + "</span>";
				}
			}
			calendar = calendar.slice(0, 5);
		}

		for (i = 0; i < calendar.length; i++) {
			calendar[i] = "<tr><td>" + calendar[i].join("</td><td>") + "</td></tr>";
		}

		calendar = $("<table>" + calendar.join("") + "</table").addClass("curr");

		$("td:empty", calendar).addClass("nil");
		if (month === new Date().getMonth()) {
			$('td', calendar).filter(function () { return $(this).text() === new Date().getDate().toString(); }).addClass("today");
		}

		createCal.cache[year][month] = { calendar : function () { return calendar.clone(); }, label : months[month] + " " + year };

		return createCal.cache[year][month];
	}
	createCal.cache = {};

	return {
		init : init,
		switchMonth : switchMonth,
		createCal : createCal
	};

};
function popup(){

   var docHeight = $(document).height();

   $("body").append("<div id='overlay' onclick='window.location.reload()'><div class='popup'><div class='date'>August 9, 2016</div><div class='checkup'>Dental Checkup</div><div class='doctor'><a href='https://www.google.com.ph/maps/place/Dr.+Marlou+Lumapas+Clinic/'>Dr. Marlou Lumapas</a></div></div></div>");

   $("#overlay")
      .height(docHeight)
      .css({
         'position': 'absolute',
         'top': 0,
         'left': 0,
         'background-color': 'rgba(0,0,0,0.4)',
         'width': '100%',
         'z-index': 10,
      });
    $(".popup")
 		.height('70%')
 		.css({
 			'position': 'relative',
         	'top': docHeight*0.15,
         	'left': 1366*0.28,
	        'background-color': 'rgba(255,255,255,1)',
	        'width': '30%',
	        'z-index': 11,
	        'margin':'0px',
	        'font-size': '16px',
    		'font-family': '\"Roboto\", sans-serif',
    		'font-weight': 'normal',
    		'text-align': 'center',
    		'vertical-align': 'middle',
      });
 	$(".date")
 		.css({
 			
 		});
};