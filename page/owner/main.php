<?php

class page_xMenus_page_owner_main extends page_componentBase_page_owner_main {
	function initMainPage(){
				$this->add('H3')->setHTML('Component Owner Main Page<small> no option At backend</small>');

	}


	function page_config(){
		$this->add('H1')->set('Default Config Page');
	}
}