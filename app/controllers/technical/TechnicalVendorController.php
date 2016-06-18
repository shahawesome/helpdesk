<?php

class TechnicalVendorController extends AdminController {

	public function getList(){
		return View::make('/technical/vendor/list_vendor');
	}
}
