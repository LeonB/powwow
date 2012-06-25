<?php

class LinkHelper extends AppHelper {
	
	function active($url) {
		var_dump($this->controller);
		var_dump(Router::normalize($this->here));
		var_dump(AppHelper::url($url));
		return AppHelper::url($this->here) === AppHelper::url($url);
	}
	
}

?>