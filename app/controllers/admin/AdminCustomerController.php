<?php

class AdminCustomerController extends AdminController {
 
	public function getAdd(){
		return View::make('/admin/customer/add_customer');
	}
	public function getList(){
		$listCustomer=$this->collaborateProvider->listCollaborate('customer');
		return View::make('/admin/customer/list_customer')
		->with('listCustomer',$listCustomer);
	}
	
	public function postAdd(){
		$status=$this->collaborateProvider->createCustomer(Input::all());
		return Redirect::back()
		->with('daftarStatus',$status);
	}
	public function getDelete($customer_id){
		$status=$this->collaborateProvider->deleteCustomer($customer_id);
		return Redirect::back()
		->with('padamStatus',$status);
	}
	public function getUpdate($customer_id){
		$maklumatuser=$this->collaborateProvider->listCollaborate($customer_id);
		return View::make('/admin/customer/update_customer')
		->with('kemaskiniStatus',$maklumatuser);
	}
	public function postUpdate(){
		$status=$this->collaborateProvider->updateUser(Input::all());
		return Redirect::to('/admin/customer/list')
		->with('kemaskiniStatus',$status);
	}	

}
