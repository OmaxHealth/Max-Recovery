var $=jQuery;
var WPTHEME = '/wp-content/themes/maxrecovery_omaxhealth_v1/';
var DOMAIN = location.protocol + "//" + location.host;

/* jQuery Constructor: Page Listener */
jQuery(document).ready(function($){	
	
	//No Functions Defined Yet
	
});

// ===================================================================
// Global Function to tell what page is viewed based on body class/ID
// ===================================================================
function isPage(a){

	if($('body#'+a).length){return true;}
	else if ($('body').hasClass(a)){return true;}
	else if ($('body').hasClass('page-'+a)){return true;}
	else{return false;}

}