<?php

class AdminUserController extends AdminController {
 
	public function getCreate(){
		//dd("dsads");
		return View::make('/admin/user/add_user');

	}

	public function postCreate(){
		$status=$this->userProvider->create(Input::all());
		return Redirect::back()
		->with('daftarStatus',$status);
	}

	public function getList(){
		$listUser=$this->userProvider->listUser();
			return View::make('/admin/user/list_user')
		->with('listUser',$listUser);
		//->with('delete',$delete);
	}
	public function getProfile(){
		return View::make('/admin/user/profile_user');
	}
	public function getUpdate($user_id){
		$maklumatuser=$this->userProvider->maklumatuser($user_id);
		return View::make('/admin/user/update_user')
		->with('maklumatuser',$maklumatuser);
	}
	public function postUpdate(){
		$status=$this->userProvider->updateUser(Input::all());
		return Redirect::to('/admin/user/list')
		->with('kemaskiniStatus',$status);
	}
	public function getUpdateCurrent(){
		return View::make('/admin/user/update_current_user');
	}
	public function getDelete($user_id){
		$status=$this->userProvider->deleteUser($user_id);
		return Redirect::back()
		->with('padamStatus',$status);
	}
	
}
