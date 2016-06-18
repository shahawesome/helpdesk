<?php

class TechnicalCustomerController extends AdminController {

	public function getList(){
		return View::make('/technical/customer/list_customer');
	}	
}
