
$(document).ready(function(){
		/*Hides My Profile*/
		$("#myProfileBar").css({ top: '-' + ($("#myProfileBar").height()-42)});
		/*End of Hides My Profile*/
		/*Sidebar Transitions*/
    $("#icon").click(function(){
			if($("#sidebar").position().left != '0')
        $("#sidebar").animate({left: '0px'});
			else
        $("#sidebar").animate({left: '-' + $("#sidebar").width() + ''});
    });
		$(document).mouseup(function(e)
		{
	    var container = $("#sidebar");
	    if (!container.is(e.target) && container.has(e.target).length === 0)
	    {
					container.animate({left: '-' + container.width() + ''});
	    }
		});
		/*End of Sidebar Transitions*/
		/*My Profile Transitions*/
		$("#myProfileIcon").click(function(){

			if($("#myProfileBar").position().top != '42')
				$("#myProfileBar").animate({top: '42px'});
			else
				$("#myProfileBar").animate({top: '-' + ($("#myProfileBar").height()-42) + ''});
		});
		$(document).mouseup(function(e)
		{
			var container = $("#myProfileBar");
			if (!container.is(e.target) && container.has(e.target).length === 0)
			{
					container.animate({top: '-' + (container.height()-42) + ''});
			}
		});
		/*End of My Profile Transitions*/
});
