<?php
	function head(){
		$mobilehead	= WEBDIR.MOBILE.'/header.html';
		include $mobilehead;
	}
	
	function activity(){
		$mobileactivity = WEBDIR.MOBILE.'activity.html';
		include $mobileactivity;
	}
	
	function footer(){
		$mobilefooter = WEBDIR.MOBILE.'footer.html';	
	}
	
	head();