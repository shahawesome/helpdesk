<?php

class TechnicalPartnerController extends AdminController {

	public function getList(){
		return View::make('/technical/partner/list_partner');
	}	
}
