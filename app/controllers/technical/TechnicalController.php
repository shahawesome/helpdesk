<?php

class TechnicalController extends BaseController {

	protected $userProvidor;
	
	public function __construct(UserProvider $userProvider){
		$this->userProvider = $userProvider;
	}

	public function getIndex(){
		return View::make('/technical/index');
	}
	public function getPendingTask(){
		return View::make('/technical/pending_task');
	}
}
