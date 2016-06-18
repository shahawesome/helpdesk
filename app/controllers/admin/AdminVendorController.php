<?php

class AdminVendorController extends AdminController { 

	public function getAdd(){
		return View::make('/admin/vendor/add_vendor');
	}
	public function getList($vendor_id=null){	
		$listVendor=$this->collaborateProvider->listCollaborate('vendor');
			if(is_null($vendor_id)){
			return View::make('/admin/vendor/list_vendor')
			->with('listVendor',$listVendor);
			
		}
		$vendor=$this->collaborateProvider->findVendor($vendor_id);
		return View::make('/admin/vendor/update_vendor')
		->with('vendor',$vendor);
	}

	public function postAdd(){
		$status=$this->collaborateProvider->createVendor(Input::all());
		return Redirect::back()
		->with('daftarStatus',$status);
	}

	//---delete vendor
	public function getDelete($vendor_id){
		$status=$this->collaborateProvider->deleteVendor($vendor_id);
		return Redirect::back()
		->with('padamStatus',$status);
	}

	public function postUpdate(){
		$status=$this->collaborateProvider->updateVendor(Input::all());
		return Redirect::to('/admin/vendor/list')
		->with('kemaskiniStatus',$status);
	}
}
