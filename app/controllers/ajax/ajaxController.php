<?php

class AjaxController extends BaseController {

	protected $collaborateProvider;
	
	public function __construct(
		CollaborateProvider $collaborateProvider){
		$this->collaborateProvider = $collaborateProvider;
		
	} 
}