<?php

class TechnicalWorkorderController extends AdminController {

	public function getPending(){
		return View::make('/technical/workorder/workorder_pending');
	}
	public function getComplete(){
		return View::make('/technical/workorder/workorder_complete');
	}
}
