<?php

class AdminController extends BaseController {

	protected $userProvidor;
	protected $collaborateProvider;
	protected $projecProvider;
	protected $productProvider;
	protected $incidentProvider;
	protected $userProvider;
	
	public function __construct(UserProvider $userProvider,CollaborateProvider $collaborateProvider, 
		ProjectProvider $projectProvider, ProjectProvider $projectProvider, ProductProvider $productProvider,
		IncidentProvider $incidentProvider, UserProvider $userProvider){
		$this->userProvider = $userProvider;
		$this->collaborateProvider = $collaborateProvider;
		$this->projectProvider = $projectProvider;
		$this->productProvider = $productProvider;
		$this->incidentProvider = $incidentProvider;
		$this->userProvider = $userProvider;
		} 

	public function getIndex(){
		return View::make('/admin/index');
	}
	
}
