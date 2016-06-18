<?php

class TechnicalProjectController extends AdminController {

	public function getList(){
		return View::make('/technical/project/list_project');
	}	
}
