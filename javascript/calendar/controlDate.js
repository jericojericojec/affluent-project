function controlDate(action)
{
	if(action=='next')
	{
		if (calendarDate.getMonth() == 11)
			calendarDate = new Date(calendarDate.getFullYear() + 1, 0, 1);
		else
			calendarDate = new Date(calendarDate.getFullYear(), calendarDate.getMonth() + 1, 1);
	}
	else
	{
		if (calendarDate.getMonth() == 0)
			calendarDate = new Date(calendarDate.getFullYear() - 1 , 11, 1);
		else
			calendarDate = new Date(calendarDate.getFullYear(), calendarDate.getMonth() - 1, 1);
	}
	setMonthYear();
}
