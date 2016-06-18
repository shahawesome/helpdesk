<?php

class AdminProjectController extends AdminController {

	public function getAdd(){
		$listCustomer=$this->collaborateProvider->listCollaborate('customer');
		$listPartner=$this->collaborateProvider->listCollaborate('partner');
		$listVendor=$this->collaborateProvider->listCollaborate('vendor');
		$listManager=$this->userProvider->listUserManager();
		return View::make('/admin/project/add_project')
		->with('listCustomer',$listCustomer)
		->with('listPartner',$listPartner)
		->with('listVendor',$listVendor)
		->with('listManager',$listManager);
	}

	public function postCreateProject(){
		$status=$this->projectProvider->createProject(Input::all());
		return Redirect::back()
		->with('daftarStatus',$status);
		

	}
	
	public function getList(){
		$listProject=$this->projectProvider->listProject();
		return View::make('/admin/project/list_project')
		->with('listProject',$listProject);
	}
	public function getUpdate($project_id){
		$listCustomer=$this->collaborateProvider->listCollaborate('customer'); 
		$listPartner=$this->collaborateProvider->listCollaborate('partner');
		$listVendor=$this->collaborateProvider->listCollaborate('vendor');
		$listProject=$this->projectProvider->listAllProject($project_id);
		$listProduct=$this->productProvider->listProductProject($project_id);
		return View::make('/admin/project/update_project')
		->with('listCustomer',$listCustomer)
		->with('listPartner',$listPartner)
		->with('listVendor',$listVendor)
		->with('listProject',$listProject)
		->with('listProduct',$listProduct);
	}
	public function postUpdate(){
		$status=$this->projectProvider->updateProject(Input::all());
		return Redirect::to('/admin/project/list')
		->with('kemaskiniStatus',$status);
	}

}
