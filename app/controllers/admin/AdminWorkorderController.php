<?php

class AdminWorkorderController extends AdminController {

	// public function getAdd(){
	// 	$listCustomer=$this->collaborateProvider->listCollaborate('customer');
	// 	return View::make('/admin/workorder/add_workorder')
	// 	->with('listCustomer', $listCustomer);
	// }
	public function getList(){ 
		
		return View::make('/admin/workorder/list_workorder');
		
	}

	public function getCreate($customer_id=null){
		$listCustomer=$this->collaborateProvider->listCollaborate('customer'); 
		$listPartner=$this->collaborateProvider->listCollaborate('partner');
		$listProject=$this->projectProvider->listCustomerProject($customer_id);
		$listSE=$this->userProvider->listTechnical();
		return View::make('/admin/workorder/create_workorder')
		->with('listCustomer',$listCustomer)
		->with('listProject',$listProject)
		->with('listPartner',$listPartner)
		->with('listSE',$listSE);
	}
}
