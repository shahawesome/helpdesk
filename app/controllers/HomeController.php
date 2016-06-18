<?php

class HomeController extends BaseController {

	public function postLogin(){
		Session::flush();
		Auth::logout();
		$user =array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
			);
		if(Auth::attempt($user)){
			$user = Auth::user();
			if($user->role=='100')
			{
				return Redirect::to('/admin');
			}
			elseif ($user->role=='69') 
			{
				return Redirect::to('/technical');
			}
			else
			{
				return Redirect::to('/');
			}
		}
		else
		{
			return Redirect::to('/');
		}
	}
	public function getLogout(){
		Session::flush();
		Auth::logout();
		return Redirect::to('/');
	}

	public function getIndex(){
		Session::flush();
		Auth::logout();
		return View::make('/index');
	}
}
