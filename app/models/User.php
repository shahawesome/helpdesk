<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, SoftDeletingTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';
	protected $softDelete = true;


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function role(){
		if($this->role=='100')
			return 'Admin';
		else
			return 'Technical';
		
	}

	public function incident(){
		return $this->hasMany('Incident');
	}

	public function pendingIncident(){
		$no=0;
		foreach ($this->incident as $inc) {
			if($inc->incidentStatus->status == 'pending')
			{
				$no=$no+1;
			}
		}
		return $no;
	}
	public function pendingTask(){
		$no=0;
		foreach ($this->incident as $inc) {
			if($inc->incidentStatus->status == 'new')
			{
				$no=$no+1;
			}
		}
		/*
		foreach ($this->workorder as $inc) {
			if($inc->workOrderStatus->status == 'new')
			{
				$no=$no+1;
			}
		}*/
		return $no;
	}

	public function project(){
		return $this->hasMany('Project');
	}

}
