//-----------------------------------------------------------------------
// = Google Conversion Tracking - Analytics
// + Dynamically insert goals and custom tracking
// + via javascript - great for ajax post submits
// + http://articles.adamwrobel.com/2010/12/23/trigger-adwords-conversion-on-javascript-event 
// @requires: jQuery
//-----------------------------------------------------------------------

var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = ""; //var google_conversion_id = 1040561654;
var google_conversion_value = 0;

function trackConversion(label)
{
	google_conversion_label = label;
	
	document.write = function(text) 
	{
		$('#container').append(text); //Adds js below site container
	};
	
	$.getScript('https://www.googleadservices.com/pagead/conversion.js');
};

//-----------------------------------------------------------------------
// = Fire Conditional CSS JS Helper
// + function for initializing a callback function with
// + specific JS variables for checking current screen state
// @requires: jQuery
// @todo: clean up script and breakpoints for better targeting
//-----------------------------------------------------------------------
function onWidthChange(target, callback )
{		
	var Mobile	= ['target-320', 'target-480', 'target-640', 'target-768', 'mobile-android', 'mobile-ios'];
	var Phone	= ['target-320', 'target-480'];
	var Tablet	= ['target-640','target-768'];
	var Desktop	= ['target-960'];
	var Android	= 'mobile-android';
	var Ios		= 'mobile-ios';
	
	/*
		Updates the DOM with targets set.
		
		use window.mobile, window.mobile_tablet, window.tablet, window.tablet_desktop and window.desktop
		
		example:
		
		if(window.mobile == true && window.mobile_tablet == false) Just mobile phones
		if(window.tablet == true) just tablets
		if(window.mobile_tablet == true) both mobile phones and tablets
		if(window.desktop == true) desktop
	*/
	
	mobile	= ($.inArray(target, Mobile) > -1) ? true : false;
	desktop	= ($.inArray(target, Desktop) > -1) ? true : false;
		
	if(typeof callback == 'function')
		callback();
}

/* Add custom site minified plugins here */