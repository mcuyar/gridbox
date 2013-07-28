/*
 * Get the site meta data placed in the application-name meta tag
 */
var siteMetaData = document.getElementById("site-meta-data");

//-----------------------------------------------------------------------
// = Google Asyncronous Analytics tracking code
// + Boilerplate analytics code for dynamic id 
// + via meta tag data attribute
// @todo: check if attribute exists before firing
//-----------------------------------------------------------------------
var gaId = siteMetaData.getAttribute("data-gaId");
var _gaq = _gaq || [];
_gaq.push(['_setAccount', gaId]);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

//-----------------------------------------------------------------------
// = Conditional CSS Breakpoints javascript helper
// + Allows css & javscript manipulation based on screen size
// https://gist.github.com/2481019
//-----------------------------------------------------------------------
function getTargetWidth()
{
	if (window.getComputedStyle && document.querySelector)
	{
			el = document.querySelector('body');
		pseudo = window.getComputedStyle(el, ':after').getPropertyValue('content');
		return pseudo.replace(/"/g, '');
	}
	else
	{	
		return "none";
	}
}