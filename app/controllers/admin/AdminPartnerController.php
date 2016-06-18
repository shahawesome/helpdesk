<?php

class AdminPartnerController extends AdminController {

	public function getAdd(){
		return View::make('/admin/partner/add_partner');
	}
	public function getList(){
		$listPartner=$this->collaborateProvider->listCollaborate('partner');
		return View::make('/admin/partner/list_partner')
		->with('listPartner',$listPartner);
	}
	public function postAdd(){
		$status=$this->collaborateProvider->createPartner(Input::all());
		return Redirect::back()
		->with('daftarStatus',$status);
	}
	public function getDelete($user_id){
		$status=$this->collaborateProvider->deletePartner($user_id);
		return Redirect::back()
		->with('padamStatus',$status);
	}
	public function getUpdate($user_id){
		$maklumatuser=$this->collaborateProvider->maklumatPartner($user_id);
		return View::make('/admin/user/update_user')
		->with('maklumatuser',$maklumatuser);
	}
	public function postUpdate(){
		$status=$this->collaborateProvider->updateUser(Input::all());
		return Redirect::to('/admin/user/list')
		->with('kemaskiniStatus',$status);
	}	
}
