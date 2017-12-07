function setMonthYear()
{
	document.getElementById("month").innerHTML = monthNames[calendarDate.getMonth()];
	document.getElementById("year").innerHTML = calendarDate.getFullYear();
	var firstDayOfTheWeek = new Date(calendarDate.getFullYear(), calendarDate.getMonth(),1).getDay();
	var lastDayOfLastMonth = new Date(calendarDate.getFullYear(), (calendarDate.getMonth() - 2),0).getDate();
	for(var i = firstDayOfTheWeek; i > 0; i--)
	{
		document.getElementById("d"+i).innerHTML = lastDayOfLastMonth;
		document.getElementById("d"+i).style.backgroundColor = "#fcfcfc";
		document.getElementById("d"+i).style.color = "#afafaf";
		document.getElementById("d"+i).style.boxShadow = "inset 0px 0 20px #d8d8d8";
		lastDayOfLastMonth--;
	}
	var lastDayOfCalendarMonth = new Date(calendarDate.getFullYear(), (calendarDate.getMonth() - 1),0).getDate();
	for(var i = 1; i <= lastDayOfCalendarMonth; i++)
	{
		document.getElementById("d"+(i+firstDayOfTheWeek)).innerHTML = i ;
		document.getElementById("d"+(i+firstDayOfTheWeek)).style.backgroundColor = "white";
		document.getElementById("d"+(i+firstDayOfTheWeek)).style.color = "black";
		document.getElementById("d"+(i+firstDayOfTheWeek)).style.border = "1px solid #c1c1c1";
		document.getElementById("d"+(i+firstDayOfTheWeek)).style.boxShadow = "inset 0px 0 0px #d8d8d8";
	}
	var overMonthCounter = 1;
	for(var i = lastDayOfCalendarMonth+firstDayOfTheWeek+1; i <= 35; i++)
	{
		document.getElementById("d"+i).innerHTML = overMonthCounter;
		document.getElementById("d"+i).style.backgroundColor = "#fcfcfc";
		document.getElementById("d"+i).style.color = "#afafaf";
		document.getElementById("d"+i).style.boxShadow = "inset 0px 0 20px #d8d8d8";
		overMonthCounter++;
	}
}
